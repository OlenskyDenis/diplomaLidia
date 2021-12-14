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


df.dropna(inplace=True)

df_clus1=df[['conformity']].groupby(df['deposit']).mean()
df_clus1['conformity'].loc[df_clus1['conformity'] < 0.5] = 0
df_clus1['conformity'].loc[df_clus1['conformity'] >= 0.5] = 1

ax1=df_clus1['conformity'].plot(figsize=(13,5), legend=True)
ax1.set_xticks(range(len(df_clus1)))
ax1.set_xticklabels(df_clus1.index,rotation=90)
ax1.figure.savefig(tmpfile, format='png')
encoded = base64.b64encode(tmpfile.getvalue()).decode('utf-8')
depGood ='data:image/png;base64, ' + str(encoded)
print(depGood)

# df = pd.read_csv('D:/Programs/OpenServer/domains/diplom/diplomaLidia/public/storage/assets/py/researches.csv')
# df['year'] = pd.to_datetime(df['data']).dt.year
# df['month'] = pd.to_datetime(df['data']).dt.month
# df['reservoir'] = df["name"] + " "+ df["region"]+ " "+ df["city"]+ " "+ df["address"]

# df['roundworms'] = df['roundworms'].astype('bool')
# df['conformity'] = df['conformity'].astype('bool')

# df.dropna(inplace=True)
# #динаміка зміни показника по певній криничці
# dfo1 = df.groupby(df.reservoir).count()
# dfo1 = dfo1[dfo1['bsk5']>25]
# reser = sys.argv[1]

# print(df['reservoir_id'].head())
# dfo = df[df['reservoir_id'] == 16]

# dfo = dfo.groupby(dfo.year).mean()
# print(dfo)
# ax=dfo[['hsk']].pairplot(kind='reg', plot_kws={'line_kws':{'color':'red'}},)
# ax.set_xlabel("Рік")
# ax.set_ylabel("ХСК")

