//-----------------------------------------------------------------------------

function es_numero(valor)
{
	var reg = new RegExp("^[0-9]+$");
	return (reg.test(valor));
}

//-----------------------------------------------------------------------------

function es_email(valor)
{
	var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	 
	return reg.test(valor);
}

//-----------------------------------------------------------------------------

function fecha_mayor_igual_que(fecha1, fecha2)
{
	// Comparación: fecha1 >= fecha2 ?
	// (YYYY*MM*DD)
	var bRes = false; 
	var sAno1 = fecha1.substr(0, 4);
	var sMes1 = fecha1.substr(5, 2); 
	var sDia1 = fecha1.substr(8, 2); 
	
	var sAno2 = fecha2.substr(0, 4);
	var sMes2 = fecha2.substr(5, 2);
	var sDia2 = fecha2.substr(8, 2); 
	 
	if ( sAno1 > sAno2 )
	{
   	bRes = true;
   }
   else
	{
   	if ( sAno1 == sAno2 )
		{
   		if ( sMes1 > sMes2 )
			{
   			bRes = true;
   		}
   		else
			{
   			if ( sMes1 == sMes2 )
				{
   				if ( sDia1 >= sDia2 )
					{
   					bRes = true;
   				}
   			}
   		}
   	}
   }
	
	return bRes; 
}

//-----------------------------------------------------------------------------