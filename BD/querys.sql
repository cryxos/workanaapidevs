
/* DELETE TABLE */
drop table `image_rel`;
drop table `image`;
drop table `section`;
drop table `module`;
drop table `guide`;
drop table `users`;

/* INSERT INTO */
INSERT INTO `guide` ( `name_guide` , `desc_guide`, `path_guide`) VALUES ('Guía de Elliot', 'La teoría Elliott Wave u Ondas de Elliott permitió desarrollar una técnica en la cual se ha confiado por décadas por ser una de las más precisas para identificar inversiones, continuaciones y grandes movimientos del mercado. Conozca el plan de estudios', 'guia-eliot');
INSERT INTO `module` ( `id_guide` , `title_module`, `title_secondary`, `desc_module`, `path_module`) VALUES (1, 'Módulo 1: Fundamentos Elliott Wave', 'Modulo I', 'texto', 'elliot-modulo-1');
INSERT INTO `module` ( `id_guide` , `title_module`, `title_secondary`, `desc_module`, `path_module`) VALUES (1, 'Módulo 2: Segundo modulo', 'Modulo II', 'Texto descriptivo de este módulo', 'elliot-modulo-ii');
INSERT INTO `section` ( `id_module` , `title_section`, `desc_section`, `path_section`) VALUES (1, 'La Guia de Elliot', '<p>Esta guia fué desarrollada tomando como fuente principal los preceptos universales de <b> Ralph Nelson Elliott</b>, dejados en su Monografia <b>"The Wave Principle (1938)"</b>; asi como tambien se usará como referencias los nuevos estudios portados por <b> Robert Prechter y A.J. Frost</b>. Especialistas y estudiosos de las teorias de Elliott. <br><br></p>', 'seccion-1-1');
INSERT INTO `section` ( `id_module` , `title_section`, `desc_section`, `path_section`) VALUES (1, 'segunda seccion', '<p>Esta guia fué desarrollada tomando x como fuente principal los preceptos universales de <b> Ralph Nelson Elliott</b>, dejados en su Monografia <b>"The Wave Principle (1938)"</b>; asi como tambien se usará como referencias los nuevos estudios portados por <b> Robert Prechter y A.J. Frost</b>. Especialistas y estudiosos de las teorias de Elliott. <br><br></p>', 'seccion-1-2');
INSERT INTO `image` ( `title_image` , `path_image`) VALUES 
( 'elliot-m1-0', 'http://localhost/slimapidevsFront/media/elliot-m1-0.jpg'),
( 'elliot-m1-1', 'http://localhost/slimapidevsFront/media/elliot-m1-1.jpg'),
( 'elliot-m1-3', 'http://localhost/slimapidevsFront/media/elliot-m1-3.jpg'),
( 'elliot-m1-4', 'http://localhost/slimapidevsFront/media/elliot-m1-4.jpg'),
( 'elliot-m1-5', 'http://localhost/slimapidevsFront/media/elliot-m1-5.jpg'),
( 'elliot-m1-6', 'http://localhost/slimapidevsFront/media/elliot-m1-6.jpg'),
( 'elliot-m1-7', 'http://localhost/slimapidevsFront/media/elliot-m1-7.jpg'),
( 'elliot-m1-8', 'http://localhost/slimapidevsFront/media/elliot-m1-8.jpg'),
( 'elliot-m1-9', 'http://localhost/slimapidevsFront/media/elliot-m1-9.jpg'),
( 'elliot-m1-10', 'http://localhost/slimapidevsFront/media/elliot-m1-10.jpg'),
( 'elliot-m1-11', 'http://localhost/slimapidevsFront/media/elliot-m1-11.jpg'),
( 'elliot-m1-12', 'http://localhost/slimapidevsFront/media/elliot-m1-12.jpg'),
( 'elliot-m2-0', 'http://localhost/slimapidevsFront/media/elliot-m2-0.jpg'),
( 'elliot-m2-1', 'http://localhost/slimapidevsFront/media/elliot-m2-1.jpg'),
( 'elliot-m2-2', 'http://localhost/slimapidevsFront/media/elliot-m2-2.jpg'),
( 'elliot-m2-3', 'http://localhost/slimapidevsFront/media/elliot-m2-3.jpg'),
( 'elliot-m2-4', 'http://localhost/slimapidevsFront/media/elliot-m2-4.jpg'),
( 'elliot-m2-5', 'http://localhost/slimapidevsFront/media/elliot-m2-5.jpg'),
( 'elliot-m2-6', 'http://localhost/slimapidevsFront/media/elliot-m2-6.jpg'),
( 'elliot-m2-7', 'http://localhost/slimapidevsFront/media/elliot-m2-7.jpg'),
( 'elliot-m2-8', 'http://localhost/slimapidevsFront/media/elliot-m2-8.jpg'),
( 'elliot-m2-9', 'http://localhost/slimapidevsFront/media/elliot-m2-9.jpg'),
( 'elliot-m2-10', 'http://localhost/slimapidevsFront/media/elliot-m2-10.jpg'),
( 'elliot-m2-11', 'http://localhost/slimapidevsFront/media/elliot-m2-11.jpg'),
( 'elliot-m2-12', 'http://localhost/slimapidevsFront/media/elliot-m2-12.jpg'),
( 'elliot-m2-13', 'http://localhost/slimapidevsFront/media/elliot-m2-13.jpg'),
( 'elliot-m2-14', 'http://localhost/slimapidevsFront/media/elliot-m2-14.jpg'),
( 'elliot-m2-15', 'http://localhost/slimapidevsFront/media/elliot-m2-15.jpg'),
( 'elliot-m2-16', 'http://localhost/slimapidevsFront/media/elliot-m2-16.jpg'),
( 'elliot-m2-17', 'http://localhost/slimapidevsFront/media/elliot-m2-17.jpg'),
( 'elliot-m2-18', 'http://localhost/slimapidevsFront/media/elliot-m2-18.jpg'),
( 'elliot-m2-19', 'http://localhost/slimapidevsFront/media/elliot-m2-19.jpg'),
( 'elliot-m2-20', 'http://localhost/slimapidevsFront/media/elliot-m2-20.jpg'),
( 'elliot-m2-21', 'http://localhost/slimapidevsFront/media/elliot-m2-21.jpg'),
( 'elliot-m2-22', 'http://localhost/slimapidevsFront/media/elliot-m2-22.jpg'),
( 'elliot-m2-23', 'http://localhost/slimapidevsFront/media/elliot-m2-23.jpg'),
( 'elliot-m2-24', 'http://localhost/slimapidevsFront/media/elliot-m2-24.jpg'),
( 'elliot-m2-25', 'http://localhost/slimapidevsFront/media/elliot-m2-25.jpg'),
( 'elliot-m2-26', 'http://localhost/slimapidevsFront/media/elliot-m2-26.jpg'),
( 'elliot-m2-27', 'http://localhost/slimapidevsFront/media/elliot-m2-27.jpg'),
( 'elliot-m2-28', 'http://localhost/slimapidevsFront/media/elliot-m2-28.jpg'),
( 'elliot-m2-29', 'http://localhost/slimapidevsFront/media/elliot-m2-29.jpg'),
( 'elliot-m2-30', 'http://localhost/slimapidevsFront/media/elliot-m2-30.jpg'),
( 'elliot-m2-31', 'http://localhost/slimapidevsFront/media/elliot-m2-31.jpg'),
( 'elliot-m2-32', 'http://localhost/slimapidevsFront/media/elliot-m2-32.jpg'),
( 'elliot-m2-33', 'http://localhost/slimapidevsFront/media/elliot-m2-33.jpg'),
( 'elliot-m2-34', 'http://localhost/slimapidevsFront/media/elliot-m2-34.jpg'),
( 'elliot-m2-35', 'http://localhost/slimapidevsFront/media/elliot-m2-35.jpg'),
( 'elliot-m2-36', 'http://localhost/slimapidevsFront/media/elliot-m2-36.jpg'),
( 'elliot-m2-37', 'http://localhost/slimapidevsFront/media/elliot-m2-37.jpg'),
( 'elliot-m2-38', 'http://localhost/slimapidevsFront/media/elliot-m2-38.jpg'),
( 'elliot-m2-39', 'http://localhost/slimapidevsFront/media/elliot-m2-39.jpg'),
( 'elliot-m2-40', 'http://localhost/slimapidevsFront/media/elliot-m2-40.jpg'),
( 'elliot-m2-41', 'http://localhost/slimapidevsFront/media/elliot-m2-41.jpg'),
( 'elliot-m2-42', 'http://localhost/slimapidevsFront/media/elliot-m2-42.jpg'),
( 'elliot-m2-44', 'http://localhost/slimapidevsFront/media/elliot-m2-44.jpg'),
( 'elliot-m2-45', 'http://localhost/slimapidevsFront/media/elliot-m2-45.jpg'),
( 'elliot-m2-46', 'http://localhost/slimapidevsFront/media/elliot-m2-46.jpg'),
( 'elliot-m2-47', 'http://localhost/slimapidevsFront/media/elliot-m2-47.jpg'),
( 'elliot-m2-48', 'http://localhost/slimapidevsFront/media/elliot-m2-48.jpg'),
( 'elliot-m2-78', 'http://localhost/slimapidevsFront/media/elliot-m2-78.jpg'),
( 'elliot-m3-34', 'http://localhost/slimapidevsFront/media/elliot-m3-34.jpg'),
( 'elliot-m3-1', 'http://localhost/slimapidevsFront/media/elliot-m3-1.jpg'),
( 'elliot-m3-2', 'http://localhost/slimapidevsFront/media/elliot-m3-2.jpg'),
( 'elliot-m3-3', 'http://localhost/slimapidevsFront/media/elliot-m3-3.jpg'),
( 'elliot-m3-4', 'http://localhost/slimapidevsFront/media/elliot-m3-4.jpg'),
( 'elliot-m3-5', 'http://localhost/slimapidevsFront/media/elliot-m3-5.jpg'),
( 'elliot-m3-6', 'http://localhost/slimapidevsFront/media/elliot-m3-6.jpg'),
( 'elliot-m3-7', 'http://localhost/slimapidevsFront/media/elliot-m3-7.jpg'),
( 'elliot-m3-8', 'http://localhost/slimapidevsFront/media/elliot-m3-8.jpg'),
( 'elliot-m3-9', 'http://localhost/slimapidevsFront/media/elliot-m3-9.jpg'),
( 'elliot-m3-10', 'http://localhost/slimapidevsFront/media/elliot-m3-10.jpg'),
( 'elliot-m3-11', 'http://localhost/slimapidevsFront/media/elliot-m3-11.jpg'),
( 'elliot-m3-12', 'http://localhost/slimapidevsFront/media/elliot-m3-12.jpg'),
( 'elliot-m3-13', 'http://localhost/slimapidevsFront/media/elliot-m3-13.jpg'),
( 'elliot-m3-14', 'http://localhost/slimapidevsFront/media/elliot-m3-14.jpg'),
( 'elliot-m3-15', 'http://localhost/slimapidevsFront/media/elliot-m3-15.jpg'),
( 'elliot-m3-16', 'http://localhost/slimapidevsFront/media/elliot-m3-16.jpg'),
( 'elliot-m3-17', 'http://localhost/slimapidevsFront/media/elliot-m3-17.jpg'),
( 'elliot-m3-18', 'http://localhost/slimapidevsFront/media/elliot-m3-18.jpg'),
( 'elliot-m3-19', 'http://localhost/slimapidevsFront/media/elliot-m3-19.jpg'),
( 'elliot-m3-20', 'http://localhost/slimapidevsFront/media/elliot-m3-20.jpg'),
( 'elliot-m3-21', 'http://localhost/slimapidevsFront/media/elliot-m3-21.jpg'),
( 'elliot-m3-22', 'http://localhost/slimapidevsFront/media/elliot-m3-22.jpg'),
( 'elliot-m3-23', 'http://localhost/slimapidevsFront/media/elliot-m3-23.jpg'),
( 'elliot-m3-24', 'http://localhost/slimapidevsFront/media/elliot-m3-24.jpg'),
( 'elliot-m3-25', 'http://localhost/slimapidevsFront/media/elliot-m3-25.jpg'),
( 'elliot-m3-26', 'http://localhost/slimapidevsFront/media/elliot-m3-26.jpg'),
( 'elliot-m3-27', 'http://localhost/slimapidevsFront/media/elliot-m3-27.jpg'),
( 'elliot-m3-28', 'http://localhost/slimapidevsFront/media/elliot-m3-28.jpg'),
( 'elliot-m3-29', 'http://localhost/slimapidevsFront/media/elliot-m3-29.jpg'),
( 'elliot-m3-30', 'http://localhost/slimapidevsFront/media/elliot-m3-30.jpg'), 
( 'elliot-m3-31', 'http://localhost/slimapidevsFront/media/elliot-m3-31.jpg'),
( 'elliot-m3-32', 'http://localhost/slimapidevsFront/media/elliot-m3-32.jpg'),
( 'elliot-m3-33', 'http://localhost/slimapidevsFront/media/elliot-m3-33.jpg'),
( 'elliot-m3-34', 'http://localhost/slimapidevsFront/media/elliot-m3-34.jpg'),
( 'elliot-m3-35', 'http://localhost/slimapidevsFront/media/elliot-m3-35.jpg'),
( 'elliot-m3-36', 'http://localhost/slimapidevsFront/media/elliot-m3-36.jpg'),
( 'elliot-m3-37', 'http://localhost/slimapidevsFront/media/elliot-m3-37.jpg'),
( 'elliot-m3-38', 'http://localhost/slimapidevsFront/media/elliot-m3-38.jpg'),
( 'elliot-m3-39', 'http://localhost/slimapidevsFront/media/elliot-m3-39.jpg'),
( 'elliot-m3-40', 'http://localhost/slimapidevsFront/media/elliot-m3-40.jpg'),
( 'elliot-m3-41', 'http://localhost/slimapidevsFront/media/elliot-m3-41.jpg'),
( 'elliot-m3-42', 'http://localhost/slimapidevsFront/media/elliot-m3-42.jpg'),
( 'elliot-m3-43', 'http://localhost/slimapidevsFront/media/elliot-m3-43.jpg'),
( 'elliot-m3-44', 'http://localhost/slimapidevsFront/media/elliot-m3-44.jpg'),
( 'elliot-m3-45', 'http://localhost/slimapidevsFront/media/elliot-m3-45.jpg'),
( 'elliot-m3-46', 'http://localhost/slimapidevsFront/media/elliot-m3-46.jpg'),
( 'elliot-m3-47', 'http://localhost/slimapidevsFront/media/elliot-m3-47.jpg'),
( 'elliot-m3-48', 'http://localhost/slimapidevsFront/media/elliot-m3-48.jpg'),
( 'elliot-m3-49', 'http://localhost/slimapidevsFront/media/elliot-m3-49.jpg'),
( 'elliot-m3-50', 'http://localhost/slimapidevsFront/media/elliot-m3-50.jpg'),
( 'elliot-m3-51', 'http://localhost/slimapidevsFront/media/elliot-m3-51.jpg'),
( 'elliot-m3-52', 'http://localhost/slimapidevsFront/media/elliot-m3-52.jpg'),
( 'elliot-m3-53', 'http://localhost/slimapidevsFront/media/elliot-m3-53.jpg'),
( 'elliot-m3-54', 'http://localhost/slimapidevsFront/media/elliot-m3-54.jpg'),
( 'elliot-m3-55', 'http://localhost/slimapidevsFront/media/elliot-m3-55.jpg'),
( 'elliot-m3-56', 'http://localhost/slimapidevsFront/media/elliot-m3-56.jpg'),
( 'elliot-m3-57', 'http://localhost/slimapidevsFront/media/elliot-m3-57.jpg'),
( 'elliot-m3-58', 'http://localhost/slimapidevsFront/media/elliot-m3-58.jpg'),
( 'elliot-m3-59', 'http://localhost/slimapidevsFront/media/elliot-m3-59.jpg'),
( 'elliot-m3-60', 'http://localhost/slimapidevsFront/media/elliot-m3-60.jpg'),
( 'elliot-m3-61', 'http://localhost/slimapidevsFront/media/elliot-m3-61.jpg'),
( 'elliot-m3-62', 'http://localhost/slimapidevsFront/media/elliot-m3-62.jpg'),
( 'elliot-m3-63', 'http://localhost/slimapidevsFront/media/elliot-m3-63.jpg'),
( 'elliot-m3-64', 'http://localhost/slimapidevsFront/media/elliot-m3-64.jpg'),
( 'elliot-m3-65', 'http://localhost/slimapidevsFront/media/elliot-m3-65.jpg'),
( 'elliot-m3-66', 'http://localhost/slimapidevsFront/media/elliot-m3-66.jpg'),
( 'elliot-m4-0', 'http://localhost/slimapidevsFront/media/elliot-m4-0.jpg'),
( 'elliot-m4-1', 'http://localhost/slimapidevsFront/media/elliot-m4-1.jpg'),
( 'elliot-m4-2', 'http://localhost/slimapidevsFront/media/elliot-m4-2.jpg'),
( 'elliot-m4-3', 'http://localhost/slimapidevsFront/media/elliot-m4-3.jpg'),
( 'elliot-m4-4', 'http://localhost/slimapidevsFront/media/elliot-m4-4.jpg'),
( 'elliot-m4-5', 'http://localhost/slimapidevsFront/media/elliot-m4-5.jpg'),
( 'elliot-m4-6', 'http://localhost/slimapidevsFront/media/elliot-m4-6.jpg'),
( 'elliot-m4-7', 'http://localhost/slimapidevsFront/media/elliot-m4-7.jpg'),
( 'elliot-m4-8', 'http://localhost/slimapidevsFront/media/elliot-m4-8.jpg'),
( 'elliot-m4-9', 'http://localhost/slimapidevsFront/media/elliot-m4-9.jpg'),
( 'elliot-m4-10', 'http://localhost/slimapidevsFront/media/elliot-m4-10.jpg'),
( 'elliot-m4-11', 'http://localhost/slimapidevsFront/media/elliot-m4-11.jpg'),
( 'elliot-m4-12', 'http://localhost/slimapidevsFront/media/elliot-m4-12.jpg'),
( 'elliot-m4-13', 'http://localhost/slimapidevsFront/media/elliot-m4-13.jpg'),
( 'elliot-m4-14', 'http://localhost/slimapidevsFront/media/elliot-m4-14.jpg'),
( 'elliot-m4-15', 'http://localhost/slimapidevsFront/media/elliot-m4-15.jpg'),
( 'elliot-m4-16', 'http://localhost/slimapidevsFront/media/elliot-m4-16.jpg'),
( 'elliot-m4-17', 'http://localhost/slimapidevsFront/media/elliot-m4-17.jpg'),
( 'elliot-m4-18', 'http://localhost/slimapidevsFront/media/elliot-m4-18.jpg'),
( 'elliot-m4-19', 'http://localhost/slimapidevsFront/media/elliot-m4-19.jpg'),
( 'elliot-m4-20', 'http://localhost/slimapidevsFront/media/elliot-m4-20.jpg'),
( 'elliot-m4-21', 'http://localhost/slimapidevsFront/media/elliot-m4-21.jpg'),
( 'elliot-m4-26', 'http://localhost/slimapidevsFront/media/elliot-m4-26.jpg'),
( 'elliot-m4-27', 'http://localhost/slimapidevsFront/media/elliot-m4-27.jpg'),
( 'elliot-m4-28', 'http://localhost/slimapidevsFront/media/elliot-m4-28.jpg'),
( 'elliot-m4-29', 'http://localhost/slimapidevsFront/media/elliot-m4-29.jpg'),
( 'elliot-m4-30', 'http://localhost/slimapidevsFront/media/elliot-m4-30.jpg'),
( 'elliot-m4-31', 'http://localhost/slimapidevsFront/media/elliot-m4-31.jpg'),
( 'elliot-m4-32', 'http://localhost/slimapidevsFront/media/elliot-m4-32.jpg'),
( 'elliot-m4-33', 'http://localhost/slimapidevsFront/media/elliot-m4-33.jpg'),
( 'elliot-m4-34', 'http://localhost/slimapidevsFront/media/elliot-m4-34.jpg'),
( 'elliot-m4-35', 'http://localhost/slimapidevsFront/media/elliot-m4-35.jpg'),
( 'elliot-m4-36', 'http://localhost/slimapidevsFront/media/elliot-m4-36.jpg'),
( 'logo', 'http://localhost/slimapidevsFront/media/logo.png');

INSERT INTO `image_rel` ( `id_image` , `id_section`, `data_image`) VALUES 
( 1, 1, 0),
( 2, 1, 1),
( 3, 2, 0),
( 4, 2, 1),
( 5, 2, 2);

INSERT INTO `users` (`id_users`, `username`, `email`, `first_name`, `last_name`, `password_user`, `dateCreated`, `dateUpdated`, `flag_users`) VALUES ('1', 'cryxos', 'cryxos@gmail.com', 'cristhian', 'yalle', '123456789', current_timestamp(), current_timestamp(), '1');

      
/* SELECT TABLE */
select * from `guide` where `flag_guide`=1;
select * from `module`;
select * from `section`;
select * from `image`;
select * from `image_rel`;

select t.id_module, t.id_guide, g.name_guide, t.title_module, t.desc_module, t.path_module, t.dateCreated, t.flag_module 
from module t, guide g 
where flag_module=1 and g.id_guide = t.id_guide;

select s.id_section, s.id_module, m.title_module , s.title_section, s.desc_section, s.path_section, s.dateCreated, s.flag_section 
from section s, module m
where s.flag_section = 1 and m.id_module = s.id_module;

/* SEARCH BY ID */
select * from guide ;
select * from section ;
select * from module ;
select * from image;
select * from image_rel;

/* :::::::: USAR EN LA WEN-VUE PRINCIAPL :::::::::: */
/* INGRESAR A MODULO1 Y TRAER TODA SU INFORMACION */
select g.id_guide, g.name_guide, g.desc_guide, g.path_guide, dateCreated from guide g 
where g.path_guide='guia-eliot' and g.flag_guide = 1;

/* INGRESAR A MODULO1 Y TRAER TODA SU INFORMACION */
select m.id_module, m.title_module, m.desc_module, m.dateCreated  from module m
where m.path_module='elliot-modulo-1' and m.flag_module = 1;

/* INGRESAR A MODULO1 Y TRAER TODAS SUS SECCIONES /// FALTA TRAER LAS IMAGENES */
select m.title_module, s.title_section, desc_Section, path_Section from section s 
inner join  module m on s.id_module = m.id_module
where m.path_module='elliot-modulo-1';

/*MODULOS DE LA GUIA : se usa en la web*/ 
select m.id_module,m.title_module from guide g 
inner join module m on g.id_guide = m.id_guide
where g.path_guide='guia-eliot' and g.flag_guide=1;

/*IMAGENES: insertar en array*/ 
select s.path_section, ir.id_image_rel, i.title_image, i.path_image, ir.data_image  from image_rel ir
inner join image i on i.id_image = ir.id_image
inner join section s on s.id_section = ir.id_section
where s.path_section = 'seccion-1-2';

/** DESACTIVAR-------------------------------- **/

/* DESACTIVAR GUIDE*/
SELECT * from guide where id_guide=1;
UPDATE guide SET flag_guide = 0 WHERE id_guide=1;

/* DESACTIVAR MODULE*/ 
 SELECT * from module where id_module=1;
UPDATE guide SET flag_module = 0 WHERE id_module=1;

/* DESACTIVAR SECTION*/ 
 SELECT * from section where id_section=1;
UPDATE section SET flag_section = 0 WHERE id_section=1;
