create database pagina;
use pagina;

create table usuarios(
id int auto_increment,
usuario varchar(40),
contrasena varchar(50),
primary key(id)
);


create table relojes(
idReloj int auto_increment,
marca varchar(40),
mecanico boolean,
material varchar(50),
cronometro boolean,
descripcion varchar(100),
precio float,
imagen varchar(100),
primary key (idReloj)
);

insert into usuarios values
('',"Administrador","hus54sdgrf45e53rgfre54gfe534vg35vgf3e"),
('',"Jorge Vendedor","hus54gh453h43gh5745fh4gfe534vg35vgf3e"),
('',"Marcos Experto","hus54sdgrf45e45gf453df345d534vg35vg3e");

insert into relojes values
('',"Boxx Boxx",true,"Acero Oystersteel",false,"Hermoso reloj mecanico antiguo en buen estado. Funciona perfectamente",4670.00,"../imagenes_relojes/1.jpg"),
('',"Omega",true,"Oro Amarillo",true,"Incluye llaves de ajuste.Funciona perfectamente",8725.00,"../imagenes_relojes/2.jpg"),
('',"Sidus",false,"Fundicion",true,"Hermoso reloj antiguo con cronometro, incluye colgante original",3650.00,"../imagenes_relojes/3.jpg"),
('',"Jiangyuyan",false,"Acero",false,"Hermoso reloj con tapa antiguo en buen estado.",480.00,"../imagenes_relojes/4.jpg"),
('',"Hamuz",false,"fundicion",true,"Hermoso con cronometro. Sin cadena",890.00,"../imagenes_relojes/5.jpg"),
('',"Quartz",false,"Oro Everose",false,"Hermoso reloj de oro everose de 18 kilates",2999.99,"../imagenes_relojes/6.jpg"),
('',"Pertlu",false,"Fundicion",false,"Reloj con cadena de engarse. No funciona, falta cambiar pila",324.99,"../imagenes_relojes/7.jpg"),
('',"Sodial",false,"Aleacion",false,"Reloj de bolsillo colgante con numero romanos negro de steampunk de la vendimia",520.00,"../imagenes_relojes/8.jpg"),
('',"Quartz",false,"Bronce",false,"Hermoso reloj de bronce antiguo. Funciona",540.00,"../imagenes_relojes/9.jpg"),
('',"Zeiger",true,"Acero Oystersteel",false,"Hermoso en reloj en muy buen estado.",5145.00,"../imagenes_relojes/10.jpg"),
('',"Ouyawei",true,"Acero Oystersteel",false,"Hermoso reloj restaurado",4240.00,"../imagenes_relojes/11.jpg"),
('',"Roskopf",false,"Acero Oystersteel",true,"Hermoso reloj antiguo. funciona bien tato el reloj como el cronometro.",2120.00,"../imagenes_relojes/12.jpg");