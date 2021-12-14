import pandas as pd
import matplotlib.pyplot as plt

import seaborn as sns
print(sys.argv[0])

df = pd.read_csv('D:/Programs/OpenServer/domains/diplom/diplomaLidia/public/storage/assets/py/researches.csv')
df['year'] = pd.to_datetime(df['data']).dt.year
df['month'] = pd.to_datetime(df['data']).dt.month
df['roundworms'] = df['roundworms'].astype('bool')
df['conformity'] = df['conformity'].astype('bool')

df.dropna(inplace=True)
df.info()
#для графіка кореляції
dfCorr = df[['lkp', 'bsk5']]
#  приведення до правильних типів даних

fig, ax = plt.subplots(1, figsize=(12,8))
sns.heatmap(dfCorr.corr(), annot=True, cmap='BuGn', ax=ax)


