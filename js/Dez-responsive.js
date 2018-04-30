function DezMenuBars(x)
{
	x.classList.toggle("DezMobileMenuBars");
}

var accordian =  document.getElementById("dez-accordion");
var i;
for(i = 0; i <= accordian.length; i++)
{
	accordian[i].addEventListener("click",function(){
		
		this.idList.toggle("dez-active-accordian");
		var panel = this.nextElementSibling;
		if(panel.style.display === 'block')
		{
			panel.style.display = "none";
		}
		else
		{
			panel.style.display = "block";
		}
	});
}