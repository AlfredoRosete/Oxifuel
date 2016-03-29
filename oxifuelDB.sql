

create database oxifuel;
	use oxifuel;

	create table estatus(
           Id_status int primary key,
           estatus  varchar(20) not null
           )ENGINE Innodb;
    
    insert into estatus(Id_status, estatus)values(1,'Activo');
    insert into estatus(Id_status, estatus)values(2,'Inactivo');
    insert into estatus(Id_status, estatus)values(3,'Espera');

    create table tipoUsuario(Id_tipoU int primary key,
           tipoUsuario varchar(25))ENGINE Innodb;

     insert into tipoUsuario(Id_tipoU,tipoUsuario)values(1,'Administrador');
     insert into tipoUsuario(Id_tipoU,tipoUsuario)values(2,'Cliente');

    create table usuario(Id_usuario int primary key AUTO_INCREMENT, nombre text,apPat text,apMat text, nickname varchar(50), 
    	password varchar(50), Id_status int not null default 1)ENGINE Innodb;
 
    insert into usuario(Id_usuario,nombre,apPat,apMat,nickname,password)
    	        values(1,'Emmanuel','Reyes','Rosas','Reyes','12345');

    insert into usuario(Id_usuario,nombre,apPat,apMat,nickname,password)
    	        values(2,'Jose Ignacio','Aponte','Cortez','Aponte','Lomeli');

    insert into usuario(Id_usuario,nombre,apPat,apMat,nickname,password)
    	        values(3,'Jesus Leonardo','Lopez','Hernandez','JLeo','123Leo');

      insert into usuario(Id_usuario,nombre,apPat,apMat,nickname,password)
    	        values(4,'Jose Alfredo','Rosete','Masahua','ChillyWilly','fredo');

    create table detalleEmpleado(Id_dEmp int primary key AUTO_INCREMENT, Id_usuario int,Id_depto int,Id_tipoU int);
    			insert into detalleEmpleado(Id_usuario,Id_depto,Id_tipoU)values(1,4,1);
    			insert into detalleEmpleado(Id_usuario,Id_depto,Id_tipoU)values(2,1,1);
    			insert into detalleEmpleado(Id_usuario,Id_depto,Id_tipoU)values(3,4,1);	        
    			insert into detalleEmpleado(Id_usuario,Id_depto,Id_tipoU)values(4,2,1);
    
    

    create table categoria(Id_categoria int primary key AUTO_INCREMENT,categoria varchar(50),Id_status int not null default 1)ENGINE Innodb; 
    	insert into categoria(Id_categoria,categoria)values(1,'Electrico');
        insert into categoria(Id_categoria,categoria)values(2,'Tuberia');
        insert into categoria(Id_categoria,categoria)values(3,'Mangueras');
        insert into categoria(Id_categoria,categoria)values(4,'Equipo');
        insert into categoria(Id_categoria,categoria)values(5,'Herramientas');
        insert into categoria(Id_categoria,categoria)values(6,'Tornilleria');


     create table articulo(Id_articulo int primary key AUTO_INCREMENT,articulo text,precio int(5),Totalpiezas int(6),Id_categoria int, Id_status int not null default 1)ENGINE Innodb;
        insert into articulo(Id_articulo,articulo,precio,Totalpiezas,Id_categoria)values(1,'Focos',30,10,1);  
        insert into articulo(Id_articulo,articulo,precio,Totalpiezas,Id_categoria)values(2,'Tubo 1 1/2 pulgada tuboplus 1metro',80,5,2);
   

      create table departamento(Id_depto int primary key AUTO_INCREMENT, departamento varchar(50))ENGINE Innodb;
      	insert into departamento(Id_depto, departamento)values(1,'Normatividad');
      	insert into departamento(Id_depto, departamento)values(2,'Soporte Tecnico');
      	insert into departamento(Id_depto, departamento)values(3,'Auditoria');
      	insert into departamento(Id_depto, departamento)values(4,'Sistemas');
      	insert into departamento(Id_depto, departamento)values(5,'Administracion y Finanzas');
      	insert into departamento(Id_depto, departamento)values(6,'Ventas y Embarques');

      create table DetalleServCot(Id_DetCot int primary key AUTO_INCREMENT, Id_articulo int,Id_categoria int,Id_usuario int,piezas int,total int(4), fechayhora datetime not null)ENGINE Innodb;
        insert into DetalleServCot(Id_DetCot,Id_articulo,Id_categoria,Id_usuario,piezas,total,fechayhora)values(1,1,1,1,2,20,'2016-03-16 06:07:10');
     /*  llaves foraneas para las tablas */

     alter table usuario add constraint foreign key (Id_status) references estatus(Id_status);
     alter table usuario add constraint foreign key (Id_tipoU) references tipoUsuario(Id_tipoU);
      

     alter table categoria add constraint foreign key (Id_status) references estatus(Id_status);


     alter table articulo add constraint foreign key (Id_categoria) references categoria(Id_categoria);
     alter table articulo add constraint foreign key (Id_status) references estatus(Id_status);

     alter table usuario add constraint foreign key (Id_depto) references departamento (Id_depto);

     alter table DetalleServCot add constraint foreign key (Id_articulo) references articulo(Id_articulo);
     alter table DetalleServCot constraint foreign key (Id_categoria) references categoria(Id_categoria);
     alter table DetalleServCot add constraint foreign key (Id_usuario) references usuario(Id_usuario);

     alter table detalleEmpleado add constraint foreign key (Id_usuario) references usuario(Id_usuario);
    alter table detalleEmpleado add constraint foreign key (Id_depto) references departamento(Id_depto);
    alter table detalleEmpleado add constraint foreign key (Id_tipoU) references tipoUsuario(Id_tipoU);
     /* consulta a la base de datos*/
    
    /*procedimientos almacenados */
    delimiter %%
     create procedure insertarUsuario(nom text,apPat text,apMat text,nickname varchar(50),pass varchar(50),Id_depto int,Id_tipoU int, sta char(1))
     	begin
               insert into usuario(nombre,apPat,apMat,nickname,password,Id_depto,Id_tipoU,status)
               	values(nom,apPat,apMat,nickname,pass,Id_depto,Id_tipoU,sta);
     	end;
    %%

    insertarUsuario('Jorge','Campos','Lomeli','Lome','3','1','1','A');


     SELECT articulo, precio, Totalpiezas, categoria from articulo INNER JOIN categoria on categoria.Id_categoria = articulo.Id_articulo;

     /* procedimiento almacenado de listar usuario */

     SELECT Id_usuario,nombre,apPat,apMat,nickname,password,departamento,tipoUsuario,estatus from usuario 
     INNER JOIN departamento on usuario.Id_depto = departamento.Id_depto
     INNER JOIN tipoUsuario on usuario.Id_tipoU = tipoUsuario.Id_tipoU
     INNER JOIN estatus on usuario.status = estatus.status;