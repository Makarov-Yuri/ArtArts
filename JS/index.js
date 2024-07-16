

MenuBar.onclick=function(){
	
	ShowedMenu.classList.add('ShowMenuAnimation');
	ShowedMenu.style.transform='translateX(0)';
	
}


document.querySelector('header').onclick=function(){
	
	if(ShowedMenu.classList.contains('ShowMenuAnimation')==true){
		
		ShowedMenu.style.transform='translateX(50vw)';
		
		setTimeout(()=>{
			
			ShowedMenu.classList.remove('ShowMenuAnimation');
			
		},400);
		
	}
	
};



if(document.querySelector('main')!=null){

	document.querySelector('main').onclick=function(){
		
		if(ShowedMenu.classList.contains('ShowMenuAnimation')==true){
			
			ShowedMenu.style.transform='translateX(50vw)';
			
			setTimeout(()=>{
				
				ShowedMenu.classList.remove('ShowMenuAnimation');
				
			},400);
			
		}
		
	};

}


if(document.querySelector('footer')!=null){

	document.querySelector('footer').onclick=function(){
		
		if(ShowedMenu.classList.contains('ShowMenuAnimation')==true){
			
			ShowedMenu.style.transform='translateX(50vw)';
			
			setTimeout(()=>{
				
				ShowedMenu.classList.remove('ShowMenuAnimation');
				
			},400);
			
		}
		
	};
	
}


//Если ширина экрана больше, чем 430 пикселей (когда появляются ссылки в меню сверху)
//То сразу убираем (прячем) меню слева

window.onresize=function(){
	
	if(window.screen.width>430){
		
		ShowedMenu.classList.remove('ShowMenuAnimation');
		
		ShowedMenu.style.transform='translateX(50vw)';
			
	}
	
}


/*


function AnimationOfOneRing(NumberOfRing){
	
	let Ring=document.querySelector("#Ring-"+NumberOfRing+"");//Получаем объект кольца
	
	let Shift=0;//Изначально сдвиг равен нулю
	
	let DelayOfAnimation=40;//Задержка в анимации между итерациями
	
	function StartAnimationOfBottomMovement(){
		
		//Включаем анимацию движения вниз
		setTimeout(function run(){
			
			Shift++;
			
			if(Shift<=0){
				
				Ring.style='transform: translateY('+Shift+'px)';
				
			} 
			
			
			if(Shift<0){
				//Если первоначалное положение не достигнуто, то снова включаем сдвиг через некоторое время
				setTimeout(run, DelayOfAnimation);
				
			}
			
			
			if(Shift==0){

				//После конца движения кольца запускаем анимацию движения внутреннего (если номер кольца больше 1), 
				//иначе снова запускаем анимацию движения внешнего
				//alert('asdf');
				
				if(NumberOfRing>1){
					
					AnimationOfOneRing(NumberOfRing-1);
					
					
				}else if(NumberOfRing==1){
					
					AnimationOfOneRing(4);
					
				}
						
			}
		
		
		}, DelayOfAnimation);
			
	}
	
	
	function StartAnimationOfTopMovement(){
			
		
		//Включаем анимацию движения вверх
		setTimeout(function run() {
			
			Shift--;
			
			if(Shift>=-15){
				
				Ring.style='transform: translateY('+Shift+'px)';
				
			} 
			
			
			if(Shift>-15){
				//Если первоначалное положение не достигнуто, то снова включаем сдвиг через некоторое время
				setTimeout(run, DelayOfAnimation);
				
			}
			
			
			if(Shift==-15){
				
				//Запускаем анимацию вдижения вниз
				StartAnimationOfBottomMovement();	
				
			}
			
		}, DelayOfAnimation);
		
	}
	
	StartAnimationOfTopMovement();	
	
}


function ready(){
    
	setTimeout(()=>{AnimationOfOneRing(4);},4000);//После конца прогрузки контента ждем некоторое время, прежде чем запускать анимацию
 
}

document.addEventListener("DOMContentLoaded", ready);//Отлавливаем прогрузку контента


*/


/*

function AnimationOfOneRing(NumberOfRing){
	
	let Ring=document.querySelector("#Ring-"+NumberOfRing+"");//Получаем объект кольца
	
	let Shift=0;//Изначально сдвиг равен нулю
	
	let DelayOfAnimation=80;//Задержка в анимации между итерациями
	
	function StartAnimationOfBottomMovement(){
		
		//Включаем анимацию движения вниз
		setTimeout(function run(){
			
			Shift++;
			
			if(Shift<=0){
				
				Ring.style='transform: translateY('+Shift+'px)';
				
			} 
			
			
			if(Shift<0){
				//Если первоначалное положение не достигнуто, то снова включаем сдвиг через некоторое время
				setTimeout(run, DelayOfAnimation);
				
			}
			
			
			if(Shift==0){
				
				StartAnimationOfTopMovement();
					
			}
			
		
		}, DelayOfAnimation);
			
	}
	
	
	function StartAnimationOfTopMovement(){
			
		
		//Включаем анимацию движения вверх
		setTimeout(function run() {
			
			Shift--;
			
			if(Shift>=-15){
				
				Ring.style='transform: translateY('+Shift+'px)';
				
			} 
			
			
			if(Shift>-15){
				//Если первоначалное положение не достигнуто, то снова включаем сдвиг через некоторое время
				setTimeout(run, DelayOfAnimation);
				
			}
			
			
			if(Shift==-15){
				
				//Запускаем анимацию вдижения вниз
				StartAnimationOfBottomMovement();
				
			}
				
			
		}, DelayOfAnimation);
		
	}
	
	StartAnimationOfTopMovement();	
	
}



function ready(){
    
	setTimeout(()=>{AnimationOfOneRing(4);},2000);//После конца прогрузки контента ждем некоторое время, прежде чем запускать анимацию
	
	setTimeout(()=>{AnimationOfOneRing(3);},2900);//После конца прогрузки контента ждем некоторое время, прежде чем запускать анимацию
	
	setTimeout(()=>{AnimationOfOneRing(2);},3800);//После конца прогрузки контента ждем некоторое время, прежде чем запускать анимацию
	
	setTimeout(()=>{AnimationOfOneRing(1);},4700);//После конца прогрузки контента ждем некоторое время, прежде чем запускать анимацию
}

document.addEventListener("DOMContentLoaded", ready);//Отлавливаем прогрузку контента





*/
