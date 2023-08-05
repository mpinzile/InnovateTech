const vowelsAmount = (word)=>{
    const name = [word]
    
    const wordLettersArray = name[0].split("")
    
    const vowelsArray = wordLettersArray.filter(
        letter=> letter.toLowerCase() == 'a' 
            || letter.toLowerCase() ==  'e' 
            || letter.toLowerCase() == 'i' 
            || letter.toLowerCase() == 'o' 
            || letter.toLowerCase() == 'u' 
        )
    console.log(vowelsArray.length)
}

vowelsAmount("python is awesome")