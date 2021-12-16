import pandas as pd
import matplotlib.pyplot as plt
import sys
import seaborn as sns
import io
import base64
import cv2
import seaborn as sns
import numpy
from sklearn.cluster import KMeans

df = pd.read_csv('D:/Programs/OpenServer/domains/diplom/diplomaLidia/public/storage/assets/py/researches.csv')
#  приведення до правильних типів даних

df['Рік'] = pd.to_datetime(df['data']).dt.year
df['Місяць'] = pd.to_datetime(df['data']).dt.month
df['roundworms'] = df['roundworms'].astype('bool')
df['conformity'] = df['conformity'].astype('bool')
df['reservoir'] = df["name"] + " "+ df["region"]+ " "+ df["city"]+ " "+ df["address"]

df.dropna(inplace=True)

#для графіка кореляції
dfCorr = df[["lkp", "bsk5", 'hsk', 'soluble_oxygen', 'ph', "roundworms", "conformity"]].copy()
dfCorr.rename(columns={'lkp': 'ЛКП', 'bsk5': 'БСК5', 'hsk': 'ХСК', 'soluble_oxygen': 'РК', 'roundworms': 'Аскариди', 'conformity': 'Якість'}, inplace=True)
#  приведення до правильних типів даних

fig, ax = plt.subplots(1, figsize=(12,8))
sns.heatmap(dfCorr.corr(), annot=True, cmap='BuGn', ax=ax)

fig.savefig('storage/assets/py/corr.png')

# tmpfile = io.BytesIO()
# fig.savefig(tmpfile, format='png')
# encoded = base64.b64encode(tmpfile.getvalue()).decode('utf-8')
# img ='data:image/png;base64, ' + str(encoded)
# print(img)

#cluster
df_clus1=df[["hsk", "bsk5", 'lkp', 'soluble_oxygen', 'ph', "roundworms", "conformity"]].groupby(df['reservoir']).mean()

df_clus1['conformity'].loc[df_clus1['conformity'] < 0.5] = 0
df_clus1['conformity'].loc[df_clus1['conformity'] >= 0.5] = 1

X=df_clus1.values
#plt.scatter(X[:,0], X[:,1])


from sklearn.cluster import MiniBatchKMeans
wcss = []
for i in range(1, 11):
    MiniBatchkmeans = MiniBatchKMeans(n_clusters=i, init='k-means++', max_iter=300, n_init=10, random_state=0)
    MiniBatchkmeans.fit(X)
    wcss.append(MiniBatchkmeans.inertia_)
plt.clf()
plt.plot(range(1, 11), wcss)
plt.xlabel('Кількість кластерів')
plt.ylabel('WCSS')
plt.savefig('storage/assets/py/elbow.png')

# tmpfile1 = io.BytesIO()
# plt.savefig(tmpfile1, format='png')
# encoded = base64.b64encode(tmpfile1.getvalue()).decode('utf-8')
# elbow ='data:image/png;base64, ' + str(encoded)
# print(elbow)

kmeans = KMeans(n_clusters=3, init='k-means++', max_iter=300, n_init=10, random_state=0)
pred_y = kmeans.fit_predict(X)
plt.clf()
plt.scatter(X[:,0], X[:,1])
plt.scatter(kmeans.cluster_centers_[:, 0], kmeans.cluster_centers_[:, 1], s=300, c='red')
plt.savefig('storage/assets/py/clusDot.png')

# tmpfile = io.BytesIO()
# plt.savefig(tmpfile, format='png')
# encoded = base64.b64encode(tmpfile.getvalue()).decode('utf-8')
# clusters ='data:image/png;base64, ' + str(encoded)
# print(clusters)

plt.clf()
plt.scatter(df_clus1.hsk, df_clus1.bsk5, c = pred_y)
plt.title('Кластери',fontsize=24)
plt.xlabel('ХСК',fontsize=14)
plt.ylabel('БСК5',fontsize=14)
# tmpfile = io.BytesIO()
# plt.savefig(tmpfile, format='png')
# encoded = base64.b64encode(tmpfile.getvalue()).decode('utf-8')
# clustersScatter ='data:image/png;base64, ' + str(encoded)
# print(clustersScatter)
plt.savefig('storage/assets/py/clustScat.png')

#потрібно вивести на екран
df1 = pd.DataFrame({'labels':pred_y, 'Outcome':df_clus1['conformity']})
crosstab = pd.crosstab(df1['labels'],df1['Outcome'])
#print(crosstab)

#к-ть досліджень в залежності від року і місяця
result = df.groupby([df['Рік'], df['Місяць']]).size()
df2 = df[['Рік', 'Місяць']].drop_duplicates(["Рік", "Місяць"])
df2 = df2.sort_values(["Рік"])
df2['count'] = result.values

fig, ax = plt.subplots(1, figsize=(12,8))
fig.clf()
flights = df2.pivot(index = "Місяць", columns="Рік", values = "count")
ax = sns.heatmap(flights, annot=True, linewidths=0.4, cmap="YlOrRd")
plt.savefig('storage/assets/py/countByDate.png')

# tmpfile = io.BytesIO()
# plt.savefig(tmpfile, format='png')
# encoded = base64.b64encode(tmpfile.getvalue()).decode('utf-8')
# countByDate ='data:image/png;base64, ' + str(encoded)
# print(countByDate)


#лінії трендів
dp1 = df[df['Рік']<2021]
dp = dp1[['bsk5','lkp','hsk','Рік','conformity','roundworms', 'ph']].groupby(df['Рік']).mean()
dp.rename(columns={ 'lkp': 'ЛКП', 'bsk5': 'БСК5', 'hsk': 'ХСК', 'soluble_oxygen': 'РК', 'roundworms': 'Аскариди', 'conformity': 'Якість'}, inplace=True)

g = sns.pairplot(dp.head(1000), y_vars=['БСК5','ЛКП','ХСК','ph','Аскариди','Якість'], x_vars=['Рік'], kind='reg', plot_kws={'line_kws':{'color':'red'}}, height=6)
plt.savefig('storage/assets/py/linetrend.png')

# tmpfile = io.BytesIO()
# plt.savefig(tmpfile, format='png')
# encoded = base64.b64encode(tmpfile.getvalue()).decode('utf-8')
# trendLines ='data:image/png;base64, ' + str(encoded)
# print(trendLines)
#goooood or bad deposits
# df = pd.read_csv('D:/Programs/OpenServer/domains/diplom/diplomaLidia/public/storage/assets/py/researches.csv')

# df['year'] = pd.to_datetime(df['data']).dt.year
# df['month'] = pd.to_datetime(df['data']).dt.month
# df['roundworms'] = df['roundworms'].astype('bool')
# df['conformity'] = df['conformity'].astype('bool')
# df['reservoir'] = df["name"] + " "+ df["region"]+ " "+ df["city"]+ " "+ df["address"]

# df.dropna(inplace=True)

# df = pd.read_csv('D:/Programs/OpenServer/domains/diplom/diplomaLidia/public/storage/assets/py/researches.csv')

df_clus1=df[["hsk", "bsk5", 'lkp', 'soluble_oxygen', 'ph', "roundworms", "conformity"]].groupby(df['deposit']).mean()

df_clus1['conformity'].loc[df_clus1['conformity'] < 0.5] = 0
df_clus1['conformity'].loc[df_clus1['conformity'] >= 0.5] = 1
plt.clf()
fig.clf()

ax=df_clus1['conformity'].plot(figsize=(13,5), legend=True, marker='x')
df_clus1['bsk5'].plot(ax=ax, color="C2", legend=True)
df_clus1['hsk'].plot(ax=ax, color="C3", legend=True)
df_clus1['ph'].plot(ax=ax, color="C4", legend=True)
df_clus1['soluble_oxygen'].plot(ax=ax, color="C5", legend=True)
df_clus1['lkp'].plot(secondary_y=True, marker='o', ax=ax, color="C6", legend=True)
ax.set_ylabel('Показники')
ax.set_xlabel('Родовища')
#df_clus1[df_clus1['conformity']==False].count()
ax.set_xticks(range(len(df_clus1)))
ax.set_xticklabels( df_clus1.index,rotation=90)
plt.ylabel('ЛКП')
plt.tight_layout()
plt.savefig('storage/assets/py/avg.png')

# tmpfile = io.BytesIO()
# plt.savefig(tmpfile, format='png')
# encoded = base64.b64encode(tmpfile.getvalue()).decode('utf-8')
# trendLines ='data:image/png;base64, ' + str(encoded)
# print(trendLines)

# good/bad deposits
df_clus1=df[['conformity']].groupby(df['deposit']).mean()
df_clus1['conformity'].loc[df_clus1['conformity'] < 0.5] = 0
df_clus1['conformity'].loc[df_clus1['conformity'] >= 0.5] = 1

fig.clf()
plt.clf()

ax1=df_clus1['conformity'].plot(figsize=(13,5), legend=True)
ax1.set_xticks(range(len(df_clus1)))
ax1.set_xticklabels(df_clus1.index,rotation=90)
# ax1.figure.savefig(tmpfile, format='png')
plt.tight_layout()
plt.savefig('storage/assets/py/deposits.png')

# encoded = base64.b64encode(tmpfile.getvalue()).decode('utf-8')
# depGood ='data:image/png;base64, ' + str(encoded)
# print(depGood)
# print("ddsfgdghfytesf")



