def word_frequency_counter(word_list):
    frequency_counter = {}  # An empty dictionary to store word frequencies
    for word in word_list:
        word = word.strip().lower()  # Removing leading/trailing whitespace and convert to lowercase
        if word in frequency_counter:
            frequency_counter[word] += 1  # Incrementing the word frequency if it's already in the dictionary
        else:
            frequency_counter[word] = 1  # Adding the word to the dictionary with a frequency of 1 if it's not there
    return frequency_counter  # Returning the dictionary with word frequencies

# Test the function with an example
word_list = ["apple", "banana", "Apple", "orange", "banana", "apple"]
print(word_frequency_counter(word_list))
