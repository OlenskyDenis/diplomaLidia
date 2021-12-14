import pandas as pd
import matplotlib.pyplot as plt

import seaborn as sns

df = pd.read_csv('D:/Programs/OpenServer/domains/diplom/diplomaLidia/public/storage/assets/py/researches.csv')
df['year'] = pd.to_datetime(df['data']).dt.year
df['month'] = pd.to_datetime(df['data']).dt.month

df['roundworms'] = df['roundworms'].astype('bool')
df['conformity'] = df['conformity'].astype('bool')

df.dropna(inplace=True)
# df.info()
#для графіка кореляції
dfCorr = df[['lkp', 'bsk5', 'hsk', 'soluble_oxygen', 'ph', 'roundworms', 'conformity']]
#  приведення до правильних типів даних

fig, ax = plt.subplots(1, figsize=(12,8))
sns.heatmap(dfCorr.corr(), annot=True, cmap='BuGn', ax=ax)
fig.savefig('storage/assets/py/corr.png')





#лінії трендів
dp1 = df[df['year']<2021]
dp = dp1[['bsk5','lkp','hsk','year','conformity','roundworms', 'ph']].groupby(df.year).mean()

sns.pairplot(dp.head(1000), y_vars=['bsk5','lkp','hsk','ph','roundworms','conformity'], x_vars=['year'], kind='reg', plot_kws={'line_kws':{'color':'red'}}, height=6 ).savefig('storage/assets/py/linetrend.png')

print ("sfs")
