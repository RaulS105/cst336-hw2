$(document).ready(function()
{

	var winnings = 0;
	var total = 0;

	$("button").on("click", () => {
		
		getRandomImage();
		
	});

	function getRandomImage()
	{

		let lotteryArray = ["bell", "bomb", "cherry", "seven"];

               var random = Math.floor(Math.random()  * lotteryArray.length);
               var random1= Math.floor(Math.random()  * lotteryArray.length);
               var random2= Math.floor(Math.random()  * lotteryArray.length);

		document.getElementById('slot1').src = `img/${random}.png`;
	
		document.getElementById('slot2').src = `img/${random1}.png`;
		
		document.getElementById('slot3').src = `img/${random2}.png`;

		
		if (random == 0 && random1 == 0 || random1 == 0 && random2 == 0 || 
			random == 2 && random1 == 2 || random1 == 2 && random2 == 2 ||
			random == 3 && random1 == 3 && random2 != 3 ||  random != 3 && random1 == 3 && random2 == 3 )
		{
			winnings += 50;
			
			$('#Winnings').html(`<h1>Your winnings are $${winnings} dollars.</h1>`);
			
		
		}
		else if (random == 3 && random1 == 3 && random2 ==3)
		{
			winnings += 777;
			
			$('#Winnings').html(`<h1>Your winnings are $${winnings} dollars.</h1>`);
			
		}

		else if (random == 0 && random1 == 0 && random2 == 0 || random == 1 && random1 == 1 && random2 == 1)
		{
			winnings += 200;
			
			$('#Winnings').html(`<h1>Your winnings are $${winnings} dollars.</h1>`);
			
		}

		else if (random == 1 && random1 == 1 && random2 != 1 || random != 1 && random1 == 1 && random2 ==1)
		{
			winnings -= 50;
			
			$('#Winnings').html(`<h1>Your losings are $${winnings} dollars.</h1>`);
		
		}
		else if (random == 1 && random1 == 1 && random2 == 1)
		{
			winnings -= 100;
			
			$('#Winnings').html(`<h1>Your losings are $${winnings} dollars.</h1>`);
		}

		if (winnings <= -200)
		{
			$('#Winnings').html(`<h1>You Should think about going home! Amount: ${winnings}</h1>`);
			
		}
	}

})
    
