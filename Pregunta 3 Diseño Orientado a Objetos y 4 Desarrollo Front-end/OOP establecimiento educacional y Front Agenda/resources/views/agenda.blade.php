<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>AGENDA</title>
    <style type="text/css">

    .Table{
        display: table;
        border-style: solid;
        border-width: medium;
    }

    .Heading{
        display: table-row;
        font-weight: bold;
        text-align: center;
    }

    .Row{
        display: table-row;
    }

    .Cell{
        display: table-cell;
        padding-left: 30px;
        padding-right:30px;
        font-size: 15px;
        text-align: center;
        
    }
    .center-div{
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 600px;
        height: 800px;
    }

    .border{
        border-style: solid;
        border-width: 1px;
    }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $.getJSON( "http://5c71b8b80eddba001435b64c.mockapi.io/api/citas", function( data ) {
            var citas = data[0];
            for (var i in citas) {
                var obj = citas[i];
                for(var j in obj)
                {
                    obj[j].forEach(function(cita){
                        var nombre = cita.nombre;
                        var idinicio = cita.hora_inicio.replace(":","");
                        var idtermino = cita.hora_termino.replace(":","");
                        if(j === "lunes")
                        {
                            comparar(1,idinicio,idtermino,cita.nombre);
                        }
                        if(j === "martes")
                        {
                            comparar(2,idinicio,idtermino,cita.nombre);
                        }
                        if(j === "miercoles")
                        {
                            comparar(3,idinicio,idtermino,cita.nombre);
                        }
                        if(j === "jueves")
                        {
                            comparar(4,idinicio,idtermino,cita.nombre);
                        }
                        if(j === "viernes")
                        {
                            comparar(5,idinicio,idtermino,cita.nombre);
                        }
                    });
                }
            }

            function comparar(dia,horai,horat,nombre)
            {
                $(document).ready(function (){
                    var divs = document.querySelectorAll('div[id]');
                    divs.forEach(function(id)
                    {
                        if(id.id >= horai && id.id <= horat )
                        {
                            $("#"+id.id+" [id^="+dia+"]").text(nombre);
                        }
                    });
                });
            }
        });
    </script>
</head>
<div class="center-div">
    <body>
        <form id="form1" runat="server">
        <div class="Table">
            <div class="Heading">
                <div class="Cell">
                    <p></p>
                </div>
                <div class="Cell">
                    <p>Lunes</p>
                </div>
                <div class="Cell">
                    <p>Martes</p>
                </div>
                <div class="Cell">
                    <p>Miércoles</p>
                </div>
                <div class="Cell">
                    <p>Jueves</p>
                </div>
                <div class="Cell">
                    <p>Viernes</p>
                </div>
            </div>

            <div id="0800" class="Row">
                <div class="Cell">
                    <p>08:00</p>
                </div>
                <div class="Cell">
                    <p id="1" ></p>
                </div>
                <div class="Cell">
                    <p id="2"></p>
                </div>
                <div class="Cell">
                    <p id="3"></p>
                </div>
                <div class="Cell">
                    <p id="4"></p>
                </div>
                <div class="Cell">
                    <p id="5"></p>
                </div>
            </div>

            <div  id="0830" class="Row">
                <div class="Cell">
                    <p>08:30</p>
                </div>
                <div class="Cell">
                    <p id="1" ></p>
                </div>
                <div class="Cell">
                    <p id="2"></p>
                </div>
                <div class="Cell">
                    <p id="3"></p>
                </div>
                <div class="Cell">
                    <p id="4"></p>
                </div>
                <div class="Cell">
                    <p id="5"></p>
                </div>
            </div>

            <div  id="0900" class="Row">
                <div class="Cell">
                    <p>09:00</p>
                </div>
                <div class="Cell">
                    <p id="1" ></p>
                </div>
                <div class="Cell">
                    <p id="2"></p>
                </div>
                <div class="Cell">
                    <p id="3"></p>
                </div>
                <div class="Cell">
                    <p id="4"></p>
                </div>
                <div class="Cell">
                    <p id="5"></p>
                </div>
            </div>

            <div  id="0930" class="Row">
                <div class="Cell">
                        <p>09:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>
               
            </div>

            <div  id="1000" class="Row">
                <div class="Cell">
                        <p>10:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>
                
            </div>

            <div  id="1030" class="Row">
                <div class="Cell">
                        <p>10:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>
        
            </div>

            <div  id="1100" class="Row">
                <div class="Cell">
                        <p>11:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>
             
            </div>

            <div  id="1130" class="Row">
                <div class="Cell">
                        <p>11:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>
   
            </div>

            <div  id="1200" class="Row">
                <div class="Cell">
                        <p>12:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>
                
            </div>

            <div  id="1230" class="Row">
                <div class="Cell">
                        <p>12:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>
         
            </div>

            <div  id="1300" class="Row">
                <div class="Cell">
                        <p>13:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>
    
            </div>

            <div  id="1330" class="Row">
                <div class="Cell">
                        <p>13:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>
            
            </div>

            <div  id="1400" class="Row">
                <div class="Cell">
                        <p>14:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="1430" class="Row">
                <div class="Cell">
                        <p>14:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="1500" class="Row">
                <div class="Cell">
                        <p>15:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="1530" class="Row">
                <div class="Cell">
                        <p>15:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="1600" class="Row">
                <div class="Cell">
                        <p>16:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="1630" class="Row">
                <div class="Cell">
                        <p>16:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="1700" class="Row">
                <div class="Cell">
                        <p>17:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="1730" class="Row">
                <div class="Cell">
                        <p>17:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="1800" class="Row">
                <div class="Cell">
                        <p>18:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>
     
            </div>

            <div  id="1830" class="Row">
                <div class="Cell">
                        <p>18:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="1900" class="Row">
                <div class="Cell">
                        <p>19:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="1930" class="Row">
                <div class="Cell">
                        <p>19:30</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>

            <div  id="2000" class="Row">
                <div class="Cell">
                        <p>20:00</p>
                    </div>
                    <div class="Cell">
                        <p id="1" ></p>
                    </div>
                    <div class="Cell">
                        <p id="2"></p>
                    </div>
                    <div class="Cell">
                        <p id="3"></p>
                    </div>
                    <div class="Cell">
                        <p id="4"></p>
                    </div>
                    <div class="Cell">
                        <p id="5"></p>
                    </div>

            </div>
        </div>
        </form>
    </body>
</div>
</html>
