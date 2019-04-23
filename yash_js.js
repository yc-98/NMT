var arp=document.querySelector('#arp');
var udp=document.querySelector('#udp');
var ipv4=document.querySelector('#ipv4');
var sp=document.querySelector('#sp');
var dp=document.querySelector('#dp');
var sp_parent=sp.parentElement.nodeName;
var dp_parent=dp.parentElement.nodeName;
var x=0;
arp.addEventListener("click",function(){
	// sp.textContent="";
	sp.parentNode.removeChild(sp);
	dp.parentNode.removeChild(dp);
    x=1;
});
udp.addEventListener("click",function(){
	if(x===1)
	{	
		var newElement = document.createElement("option");
    	newElement.setAttribute('id',"sp");
    	newElement.innerHTML = "Source Port";
    	var p= document.querySelector(sp_parent);
    	p.appendChild(newElement);

    	newElement = document.createElement("option");
    	newElement.setAttribute('id',"dp");
    	newElement.innerHTML = "Destination Port";
    	p= document.querySelector(dp_parent);
    	p.appendChild(newElement);
    	sp=document.querySelector('#sp');
		dp=document.querySelector('#dp');
    	// console.log(p);
    	x=0;
	}
});
ipv4.addEventListener("click",function(){
	if(x===1)
	{
		var newElement = document.createElement("option");
    	newElement.setAttribute('id',"sp");
    	newElement.innerHTML = "Source Port";
    	var p= document.querySelector(sp_parent);
    	p.appendChild(newElement);
    	
    	newElement = document.createElement("option");
    	newElement.setAttribute('id',"dp");
    	newElement.innerHTML = "Destination Port";
    	p= document.querySelector(dp_parent);
    	p.appendChild(newElement);
    	sp=document.querySelector('#sp');
		dp=document.querySelector('#dp');
    	x=0;
	}
});
