import nltk

def processText(query):
    query = "Most recent prizes of 2017"
    sentence = nltk.pos_tag(nltk.word_tokenize(query))
    newSentence = ""
    for word in sentence:
        print(word)
        if word[1][0] == "N" or word[1] == "CD" or word[1] == "JJS":
            newSentence += word[0]+" "
    print(newSentence)
    
    




