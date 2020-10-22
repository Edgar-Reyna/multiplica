var milista1=new Array;
var milista2=new Array;
var aciertos=0;
var errores=0;

function numero1(){
    r=0;

    while (r==0) {
        r=Math.floor(Math.random() * 11);     
    }
        
    document.write(r);
    milista1.push(r);
}

function numero2(){
    r=0;

    while (r==0) {
        r=Math.floor(Math.random() * 11);     
    }
        
    document.write(r);
 	milista2.push(r);   
}

function resultado(ide){
	resultados=milista1[ide]*milista2[ide];
	document.write(resultados);
}

function checa(ide){
	resultado=milista1[ide]*milista2[ide];
	reng="Res"+ide;	
	rengu="Resu"+ide;	
	ren="Ren"+ide;	
	res=document.getElementById(reng).value;

	if (res==resultado){
		document.getElementById(reng).style.visibility="hidden";
		document.getElementById(ren).style.display="none";

		document.getElementById(rengu).style.visibility="visible";
		document.getElementById(rengu).style.backgroundColor="green";
		document.getElementById(rengu).style.color="white";

		aciertos+=1;
		ganar=aciertos*.5;
		document.getElementById("aciertos").innerHTML=aciertos;
		document.getElementById("errores").innerHTML=errores;
		document.getElementById("ganado").innerHTML=ganar;
	}else{		
		document.getElementById(reng).style.visibility="hidden";
		document.getElementById(ren).style.display="none";

		document.getElementById(rengu).style.visibility="visible";
		document.getElementById(rengu).innerHTML=res;
		document.getElementById(rengu).style.backgroundColor="red";
		document.getElementById(rengu).style.color="white";

		errores+=1;
		document.getElementById("errores").innerHTML=errores;
		document.getElementById("aciertos").innerHTML=aciertos;
	}

}