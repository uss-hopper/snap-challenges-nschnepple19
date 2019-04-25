//given weightKg:
//given weightLbs
//set intermediaryVariable to weightKg 1;
//set weightKg to intermediaryVariable * .454
//return weightLbs


//function findPositiveFactors(positiveFactors) {
	//let factors = 12/2;
	//let
//
//}




//solutions

// Write an algorithm, either in pseudocode or in code, that converts weights to grams. The algorithm should take
//  two arguments. The first argument will be a number, the second will be an abbreviation for a unit of weight,
//  either "lbs", "oz", "kg", "g", or "mg". Based on the second argument, convert the number to grams and output it.

function convertToGrams(weight, units) {

	if(units === "lbs") {
		return weight * 453.592;
	} else if (units === "oz") {
		return weight * 28.349;
	} else if (units === "kg") {
		return weight * 1000;
	} else if (units === "mg") {
		return weight / 1000;
	} else if (units === "g") {
		return weight;
	}


	console.log("we passed the return");

}

console.log(convertToGrams(7, "lbs"));
console.log(convertToGrams(14, "oz"));
console.log(convertToGrams(32, "kg"));
console.log(convertToGrams(18, "mg"));
console.log(convertToGrams(24, "g"));


// Write a function in JavaScript that takes a number and finds the sum of all
// unique positive factors of a number. (The factors of a number are all numbers
// that divide evenly into it. For example, the unique positive factors of 12 are
// 1, 2, 3, 4, 6, and 12, and the sum would thus be 28.)

number:
i:
sum:

function sumFactors(number) {
	sum = 0;
	for(i = number; i > 0; i--) {
		if(number % i === 0) {
			sum = i + sum;
		}
	}
	return sum;
}

console.log(sumFactors(1));
console.log(sumFactors(4));
console.log(sumFactors(12));
console.log(sumFactors(1785967923));