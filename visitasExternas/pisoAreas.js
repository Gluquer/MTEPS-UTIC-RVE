function populate (s1,s2)
{
  var s1=document.getElementById('slct1');
  var s2=document.getElementById('slct2');
 
  
   s2.innerHTML = "";
   if(s1.value == "PB")
   { 
     var optionArray=["select|Select",
     "PB1|JEFATURA DEPARTAMENTAL DE TABAJO LA PAZ",
     "PB2|UNIDAD DE COMUNICACION",
     "PB3|PLATAFORMA DE ATENCION",
     "PB4|VENTANILLA UNICA",
     "PB5|FONDOS DE CUSTODIA",
     "PB6|SALA DE CONCILIACION",
     "PB7|SALA DE PRENSA DOMITILA BARRIOS",
     "PB8|ARCHIVO CENTRAL"];
   }
   else if(s1.value == "SS")
   {
    var optionArray=["select|Select","SS1|VISADO DE CONTRATOS","SS2|SALON JUAN LECHIN OQUENDO","SS3|PLANILLAS Y FINIQUITOS"];
   }
   else if(s1.value == "P1")
   {
    var optionArray=["select|Select","PP1|DIRECCION GENERAL DE TRABAJO, HIGIENE Y SEGURIDAD OCUPACIONAL",
      "PP2|DIRECCION GENERAL DE ASUSTOS SINDICALES",
      "P3|UNIDAD DE TECNOLOGIA DE INFORMACION Y COMUNICACIONES",
      "P4|UNIDAD DE DERECHOS FUNDAMENTALES",
      "P5|UNIDAD DE TRANSPARENCIA",
      "P6|UNIDAD DE GESTION JURIDICA",
      "P7|PROMOCION SINDICAL",
      "P8|INSPECTORIA",
      "P9|SEGURIDAD OCUPACIONAL",
      "P10|ARCHIVO DE GESTION JURIDICA"];
   }
   else if(s1.value == "P2")
   {
    var optionArray=["select|Select","2P1|DESPACHO MINISTRA",
    "2P2|VICEMINISTERIO DE EMPLEO, SERVICIO CIVIL Y COOPERATIVAS",
    "2P3|VICEMINISTERIO DE TRABAJO Y PREVISION SOCIAL",
    "2P4|DIRECCION GENERAL DE ASUNTOS JURIDICOS",
    "2P5|DIRECCION GENERAL DE PLANIFICACION",
    "2P6|UNIDAD DE ANALISIS JURIDICO",
    "2P7|UNIDAD DE RELACIONES INTERNACIONALES",
    "2P8|SALON ROJO"];
   
   }
   

   for(var option in optionArray)
   {
     var pair = optionArray[option].split("|");
     var newOption = document.createElement("option");
     newOption.value = pair[0];
     newOption.innerHTML = pair[1];
     s2.options.add(newOption);

   }
   
}



function populated(c1,c2)
{
  var c1=document.getElementById(c1);
  var c2=document.getElementById(c2);
 
  c2.innerHTML = "";
   if (c1.value == "PB1")
   { 
     var optionArray = ["select|Select","JDT1|Boris Douglas Fernandez Bernal",
     "JDT2|Ana Ross Mery Miranda de Guaman",
     "JDT3|Alejandra Hurtado Peralta",
     "JDT4|Wilson Quispe Gonzales",
     "JDT5|Victor Hugo Lopez Calderón",
     "JDT6|Haidee Lopez Apaza",
     "JDT7|Rosa Espinoza Flores",
     "JDT8|Ruth Remy Quisbert Soria"];
   }
   else if (c1.value == "PB2")
   { 
     var optionArray = ["select|Select","UC1|Maria Patricia Almaraz Chavarria",
"UC2|Mary Helen Ticona Quispe",
"UC3|Jaime Emilio Buitrago Romero",
"UC4|Nilza Patricia Salas Beltran",
"UC5|Alberto Espinoza Apaza"];
   }
    else if (c1.value == "PB3")
   { 
     var optionArray = ["select|Select","PT1|Andres Quintana Aguilar","PT2|Teclo Gonzales Puquimia","PT3|Carla Nieves Garcia Maldonado"];
   }
   else if (c1.value == "PB8"){ 
     var optionArray = ["select|Select","AC1|Miguel Angel Segundo Frank","AC2|Tito Antonio Ramirez Prada","AC3|Edwin Richard Guarachi Orellana"];
   }
    else if (c1.value == "PP1")
     { 
       var optionArray = ["select|Select","TH1|Yecid Adalid Mollinedo Mejía",
       "TH2|Rosa Luisa Gutierrez de Cortéz",
       "TH3|Pedro Calderon Rodriguez",
       "TH5|Julia Elena Condori Montevilla",
       "TH6|Jenny Rosio Martinez Retamozo",
       "TH7|Pablo Ponce Navarro",
       "TH8|Wendy Marlene Paño Titirico"];
     }
     else if (c1.value == "PP2")
   { 
     var optionArray = ["select|Select"," AS1|Ramiro Ariel Alanoca Mamani",
     "AS2|Eva Zulma Ramos Catari",
     "AS3|Micaela Marylin Vargas Guarachi", 
     "AS4|Lizet Adriana Quiroz Chavarria", 
     "AS5|Betzy Giovana Yujra Yujra",
     "AS6|Alvaro Fernando Zuleta Barrera", 
     "AS7|Alejandra Teresa Pinto Vargas", 
     "AS8|Edmundo Edwin Calderon Benavides", 
     "AS9|Carla Fabiola Lopez Cuentas",
     "AS10|Miguel Justiniano Camacho", 
     "AS11|Rider Jesus Mollinedo Arratia", 
     "AS12|Cristhian Jiwaqui Ramos Mamani", 
     "AS13|Bryan Alam Fernandez Apaza"];
   }
   else if (c1.value == "P3")
   { 
     var optionArray = ["select|Select","UT1|Edwin Alvaro Maceda Churruarrin",
"UT2|Miguel Angel Calzada Vega",
"UT3|Robert Jonathan Challco Chalco",
"UT4|Linda Lee Carvajal Miranda",
"UT5|Lucrecia Gladys Ancasi Chambi",
"UT6|Jorge Pizarro Tellez",
"UT7|Pedro Zambrana Rivera",
"UT8|Edson Guillermo Zabala Cruz",
"UT9|Rohuddy Jimena Murillo Velasco",
"UT10|Juan Huanca Quisbert",
"UT11|Leonardo Benito Peña",
"UT12|Carlos Alberto Troche Quispe",	
"UT13|Lola Ytusaca Mamani",
"UT14|Monica Isabel Roman Pacheco",
"UT15|Armando Mamani Mamani"];
   }
   else if (c1.value == "P4")
   { 
     var optionArray = ["select|Select","UTF1|Gabriel Carranza Polo",
     "UTF2|Alison Cintia Armaza Nuñez",
     "UTF3|Sandro Remberto Delgado Galvez",
     "UTF4|Guisela Vasquez Zabala",
     "UTF5|Fredy German Choque Mendoza",
     "UTF6|Edson Socaticona Mamani"];
   }
   else if (c1.value == "P5")
   { 
     var optionArray = ["select|Select","UT1|Celia Angelica Muñoz Montecinos","UT2|Willams Leonel Chura Paye"];
   }
   else if (c1.value == "P6")
   { 
     var optionArray = ["select|Select","GJ1|Roger Lidio Chuquimia Mamani","GJ2|Norah Isabel Castro Alvarez",
     "GJ3|Carlos Michel Andrade Ramos",
     "GJ4|Jorge Cristhian Siácara Colque",
     "GJ5|Blenda Jaimes Piñeiro",
     "GJ6|Jaqueline Victoria Davalos Torrez",
     "GJ7|Cinthya Quispe Silva",
     "GJ8|Gabriel Alejandro Miranda Gemio",
     "GJ9|Jose Luis Gonzales Fernandez"];
   }
   else if (c1.value == "P7")
   { 
     var optionArray = ["select|Select","PS1|Policarpio Quiroz Quispe","PS2|América Isabel Maceda Llanque","PS3|Jorge Edwin Coca Valencia",
     "PS4|Juan Mauricio Ramos Paredes"];
   } else if (c1.value == "P8")
   { 
     var optionArray = ["select|Select","IT1|José Luis Rodriguez Mujica","IT2|Angela Maria Lima Aruquipa","IT3|Mary Elizabeth Velasco Bautista",
     "IT4|Karla Fabiola Teran Eguez",
     "IT5|Sandra Liceth Jimenez Lopez",
     "IT6|Sulma Patricia Ala Torrez",
     "IT7|Zulma Alejo Garcia",
     "IT8|Wilson Nestor Constancio Choque",
     "IT9|Charlie Giovani Huarca Huayhua",
     "IT10|Marinela Orihuela Gonzales",
     "IT11|Sonia Raquel Vargas Sillo",
     "IT12|Cesar Luis Edgardo Garnica Chavez",
     "IT13|Silvia Carmiña Bascope De Duranboger",
     "IT14|Neiza Adriana Callisaya Nina",
     "IT15|Marisol Pinaya Ramos",
     "IT16|Danitza Flores Mamani"];
   }
   else if (c1.value == "P9")
   { 
     var optionArray = ["select|Select","SO1|Rodrigo Alvaro Villegas Godoy","SO2|Monica Stephany Borda Fernandez","SO3|Harold Damaso Poma Alanoca"];
   }
   else if (c1.value == "2P1")
   { 
     var optionArray = ["select|Select","DM1|Verónica Patricia Navia Tejada",
     "DM2|Susana Ercilia Aramayo Rodriguez",
     "DM3|María Dolores Davalos Centellas",
     "DM4|Shirley Angela Valverde Botello",
     "DM5|Felix Quispe Chirin",
     "DM6|Robert Huanca Paredes",
     "DM7|Marleny Nieves Choque Espinoza",
     "DM8|Gerardo Felix Clavijo Cardenas",
     "DM9|Carlos Heriberto Torrico Estrada",
     "DM10|Rosmery Miriam Mercado Soliz",
     "DM11|Ivonne Petruska Yañez Hurtado"];

   }
   else if (c1.value == "2P2")
   { 
     var optionArray = ["select|Select","VE1|Gonzalo Omar Zambrana Avila",
     "VE2|Rocio Mabel Clemente Tito",
     "VE3|Lorena Paola Perez Tarifa",
     "VE4|Efrain Hilarion Nina Avalos"];
   }
   else if (c1.value == "2P3")
   { 
     var optionArray = ["select|Select","TP1|Victor Pedro Quispe Ticona",
     "TP2|Raquel Jenny Tarquino Monasterios",
     "TP3|Nelson Lopez Quispaya",
     "TP4|Cesar Augusto Chuquimia Copa",
     "TP5|Miguel Ascencio Yampara Laura"];
   }
   else if (c1.value == "2P4")
   { 
     var optionArray = ["select|Select","AJ1|Fabiola Pareja Gutierrez",
     "AJ2|Elsa Virginia Ticona Conde",
     "AJ3|Sandra Mabel Muñoz Guzman",
     "AJ4|Marcelo Pio Marza Alcon"];
   }
   else if (c1.value == "2P5")
   { 
     var optionArray = ["select|Select","DP1|Edson Ali Espinoza",
     "DP2|Victor Toshiro . Suzuki",
     "DP3|Valeria Andrea Pari Leon",
     "DP4|Moises Santiago Loza Espejo",
     "DP5|Paola Carola Ayllon Erasmo",
     "DP6|Eloysa Aponte Justiniano"];
   }
   
   else if (c1.value == "2P6")
   { 
     var optionArray = ["select|Select",
     "UAJ1|Claudia Janeth Perez Madani",
     "UAJ2|Boris Efren Cardenas Sanjines",
     "UAJ3|Saidi Alejandra Paucara Escalante",
     "UAJ4|Gabriela Mirtha Arellano Centellas",
     "UAJ5|Jhouselinne Sandra Duran Conde",
     "UAJ6|Carmen Luisa Ponce Achata",
     "UAJ7|Israel Nohego Gonzales Paredes",
     "UAJ8|Adalid Rodny Ramos Estrada",
     "UAJ9|Brenda Beatriz Huanca Aliaga",
     "UAJ10|Yolanda Quispe Quispe",
     "UAJ11|Adolfo Laruta Hilari"];
   }
   
   else if (c1.value == "2P7")
   { 
     var optionArray = ["select|Select","AI1|Maya Gabriela Verazain Zuazo","AI2|Erika Lizet Arteaga Miranda"];
   }
   
   else if (c1.value == null)
   { 
     var optionArray = ["|"];
   }
   for(var option in optionArray)
   {
     var pair = optionArray[option].split("|");
     var newOption = document.createElement("option");
     newOption.value = pair[0];
     newOption.innerHTML = pair[1];
   c2.options.add(newOption);

   }

}