//1.Count Odd Numbers in an array

function countOddNumbersInArray(arr: number[]) : number {
    let count = 0;
    for(let number of arr) {
        if(number % 2 !== 0) {
            count++;
        }
    }
    return count;
}