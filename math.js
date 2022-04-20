function multiplyBy()
{
		num1 = document.getElementById("firstNumber").value;
		num2 = document.getElementById("secondNumber").value;
		document.getElementById("result").innerHTML = num1 * num2;
}

function divideBy()
{
		num1 = document.getElementById("firstNumber").value;
		num2 = document.getElementById("secondNumber").value;
		document.getElementById("result").innerHTML = num1 / num2;
}

function primeorNot()
{
		num3 = document.getElementById("primeNumber").value;

		var i;
		var flag = true;
			if (num3 == 1) 
			{
			flag = false;
			} 
			else 
			{
			for(i = 2; i < num3-1; i++) 
			{
			if (num3 % i == 0) 
			{
			flag = false;
				break;
			}
			}
			}
			if(flag == true) 
			{
		document.getElementById("lol").innerHTML = num3 + " is a Prime Number";
			} 
			else 
			{
		document.getElementById("lol").innerHTML = num3 + " is not a Prime Number";
			}
}
