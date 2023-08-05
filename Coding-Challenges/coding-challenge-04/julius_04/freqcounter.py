import re


def extract_words(input_str):
    words = re.findall(r'\b[a-zA-Z]+\b', input_str)
    return words


def wordFrequencyCounter(word_list):
    word_freq = {}
    for word in word_list:
        word = word.strip().lower()
        word_freq[word] = word_freq.get(word, 0) + 1
    return word_freq


def main():
    inputs = input("Enter words: ")
    input_words = extract_words(inputs)

    output_freq = wordFrequencyCounter(input_words)

    for word, count in output_freq.items():
        print(f"{word}: {count}")


if __name__ == "__main__":
    main()
