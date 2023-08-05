const checkPalindrome = (name) => {
    const nameArray = [name];
    const splittedNameArray = nameArray[0].split('');
    const reversedNameArray = splittedNameArray.reverse();
    const reversedNameString = reversedNameArray.join('');
    const result = (name === reversedNameString)
    console.log(result)
}

checkPalindrome("hello");