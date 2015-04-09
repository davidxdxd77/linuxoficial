function Display(parametro) {
 
		var elElemento=document.getElementById(parametro)
   if (elElemento==  document.getElementById('1')){
   
     	document.getElementById('1').style.display = 'block';
		document.getElementById('2').style.display = 'none';
		document.getElementById('3').style.display = 'none';
		document.getElementById('4').style.display = 'none';
		document.getElementById('5').style.display = 'none';
				   
    }if(elElemento==  document.getElementById('2')){
		document.getElementById('1').style.display = 'none';
		document.getElementById('2').style.display = 'block';
		document.getElementById('3').style.display = 'none';
		document.getElementById('4').style.display = 'none';
		document.getElementById('5').style.display = 'none';	
	
			
	}if(elElemento==  document.getElementById('3')){
		document.getElementById('1').style.display = 'none';
		document.getElementById('2').style.display = 'none';
		document.getElementById('3').style.display = 'block';
		document.getElementById('4').style.display = 'none';
		document.getElementById('5').style.display = 'none';	
			
	}if(elElemento==  document.getElementById('4')){
		document.getElementById('1').style.display = 'none';
		document.getElementById('2').style.display = 'none';
		document.getElementById('3').style.display = 'none';
		document.getElementById('4').style.display = 'block';
		document.getElementById('5').style.display = 'none';	
			
	}if(elElemento==  document.getElementById('5')){
		document.getElementById('1').style.display = 'none';
		document.getElementById('2').style.display = 'none';
		document.getElementById('3').style.display = 'none';
		document.getElementById('4').style.display = 'none';
		document.getElementById('5').style.display = 'block';	
			
	}
	
   
   }