import pandas as pd
from sklearn import preprocessing
from sklearn.naive_bayes import GaussianNB
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
import sys

df_pred = pd.read_csv('D:/Programs/OpenServer/domains/diplom/diplomaLidia/public/storage/assets/py/researchesPredict.csv')
#  приведення до правильних типів даних
# print(df_pred)

#df_pred['roundworms'] = df_pred['roundworms'].astype('bool')
#df_pred['conformity'] = df_pred['conformity'].astype('bool')

df_pred.dropna(inplace=True)

df_pred = df_pred[['hsk', 'bsk5', 'ph', 'soluble_oxygen', 'lkp', 'roundworms', 'conformity']]
#df_pred.dropna(inplace = True)

conf=df_pred['conformity']

#creating labelEncoder
# Converting string labels into numbers.
le = preprocessing.LabelEncoder()

label=le.fit_transform(conf)
label=le.fit_transform(conf)

features=zip(df_pred['hsk'], df_pred['bsk5'], df_pred['ph'], df_pred['soluble_oxygen'], df_pred['lkp'], df_pred['roundworms'])
features_list = list(features)

model = GaussianNB() #for decimal
#model = BernoulliNB() #0/1
#model = MultinomialNB() #1,2,3

# model.fit(features_list,label)

# #Predict Output
# feature_combination = [[5900.0,  10,   8, 5, 4600, False]]
# feature_combination = [[1200.0,	4.405852,	28.638471,	4.292430,	7.183889,	False]]
# feature_combination = [[0,0,0,0,0,False]]
# feature_combination = [[20.77,3.21,7.01,3,4600,False]]
# Play_predicted= model.predict(feature_combination)

# print ("Для наступної комбінації (ХСК,БСК5,pH,РК,ЛКП,аскариди) ")
# print (feature_combination)
# print ("Прогнозована якість води: ", Play_predicted)
# print ("2222222 ")


X = df_pred.drop('conformity',axis=1)
y = df_pred['conformity']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.1, random_state=42)
model.fit(X_train,y_train)

y_pred = model.predict(X_test)
feature_combination = [list(map(int, (sys.argv[2]).split(',')))] #всі показники в нормі
# print(feature_combination)
Play_predicted= model.predict(feature_combination)

# print ("Для наступної комбінації (ХСК,БСК5,pH,РК,ЛКП,аскариди)", feature_combination)
print (int(Play_predicted[0]))
#відсоток точності прогнозу
print(accuracy_score(y_test,y_pred))

