

CREATE TABLE public.cliente
(
    id_cliente SERIAL  NOT NULL,
    nombre character varying,
    correo character varying,
    edad numeric,
    telefono numeric,
    PRIMARY KEY (id_cliente)
)
WITH (
    OIDS = FALSE
);

ALTER TABLE IF EXISTS public.cliente
    OWNER to postgres;
	
	
	
	
INSERT INTO cliente(id_cliente,nombre, correo, edad, telefono ) 
VALUES(DEFAULT,'Jorge Pérez', 'operezjorge@gmail.com', 23, 56721449);

	
INSERT INTO cliente(id_cliente,nombre, correo, edad, telefono ) 
VALUES(DEFAULT,'Uchinaga Uri', 'giselle@gmail.com', 23, 58698587);

	
INSERT INTO cliente(id_cliente,nombre, correo, edad, telefono ) 
VALUES(DEFAULT,'Sakura Miyawaki', 'sakura@gmail.com', 23, 58485454);


	
INSERT INTO cliente(id_cliente,nombre, correo, edad, telefono ) 
VALUES(DEFAULT,'Juri Takahashi', 'juri@gmail.com', 23, 58695847);


	
INSERT INTO cliente(id_cliente,nombre, correo, edad, telefono ) 
VALUES(DEFAULT,'Kim Minjeong', 'winter@gmail.com', 23, 58695847);


	
INSERT INTO cliente(id_cliente,nombre, correo, edad, telefono ) 
VALUES(DEFAULT,'Lee Chaerin', 'chaerin@gmail.com', 23, 57900296);



select * from cliente where id_cliente=9;


select * from cliente where id_cliente=1;

select * from cliente where id_cliente=2;

select * from cliente where id_cliente=3;

insert

update cliente set nombre = 'Jorge 2', correo = 'operezjorge@gmail.com' , edad=23, telefono=56721449
where id_cliente =1;


update cliente set nombre = 'Romero 2', correo = 'mr3@gmail.com' , edad=22, telefono=39393939
where id_cliente =3;

delete  from cliente;

delete from cliente where id_cliente=1;


SELECT * FROM cliente;


DELETE from automovil where id_automovil=4


	
	
	