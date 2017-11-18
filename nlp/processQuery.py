import nltk
nltk.download('punkt')
from datetime import date
# from prizes.models import Prize
# from laureates.models import Laureate
# from prizes.models import PrizeAward

def processText(query):
    # query = "Most recent prizes of 2017"
    sentence = nltk.pos_tag(nltk.word_tokenize(query))
    newSentence = ""
    for word in sentence:
        print(word)
        if word[1][0] == "N" or word[1] == "CD" or word[1] == "JJS":
            newSentence += word[0]+" "
        # Category: N
        # Motivation: N / JJS
        # FirstName and Surname: N
        # Year: CD (cardinal number)
        # Timeframe/other: JJS 
    # print(newSentence)
    return {sentence:newSentence}

# processText("Where is einstein from 1997 to 2005")

# def getQuery(data):
#     obj = Laureate.objects
#     query = nltk.pos_tag(nltk.word_tokenize(data))
    
#     for word in query:
#         if word[1] == "CD":
#             if int(word[0]) > 1890 and int(word[0]) < date.today().year + 1:
#                 obj = obj.filter(year=int(word[0]))
#             else:
#                 obj[:] = 
#         elif word[1][0] == "N":
#             for obj[:] = [object for object in obj if word[0] in object.firstname or word[0] in object.pr]
                