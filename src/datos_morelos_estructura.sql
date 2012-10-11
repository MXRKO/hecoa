/*
SQLyog Enterprise - MySQL GUI v7.13 
MySQL - 5.0.67-community : Database - datos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`datos` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `datos`;

/*Table structure for table `c_aportaciones` */

DROP TABLE IF EXISTS `c_aportaciones`;

CREATE TABLE `c_aportaciones` (
  `CVE_APORTACION` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(60) default NULL,
  `RAMO_33` varchar(1) default NULL,
  PRIMARY KEY  (`CVE_APORTACION`),
  UNIQUE KEY `CVE_APORTACION` (`CVE_APORTACION`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_beneficiarios` */

DROP TABLE IF EXISTS `c_beneficiarios`;

CREATE TABLE `c_beneficiarios` (
  `CVE` int(10) unsigned NOT NULL auto_increment,
  `CVE_PRO` varchar(2) NOT NULL,
  `CVE_SPRO` varchar(2) NOT NULL,
  `CVE_SSPRO` varchar(2) default NULL,
  `BENEFICIARIO` varchar(45) NOT NULL,
  PRIMARY KEY  (`CVE`)
) ENGINE=InnoDB AUTO_INCREMENT=245 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Table structure for table `c_conceptopago` */

DROP TABLE IF EXISTS `c_conceptopago`;

CREATE TABLE `c_conceptopago` (
  `CVE_CONCEPTO_PAGO` varchar(10) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL,
  PRIMARY KEY  (`CVE_CONCEPTO_PAGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `c_conceptos` */

DROP TABLE IF EXISTS `c_conceptos`;

CREATE TABLE `c_conceptos` (
  `CVE_CONCEPTO` varchar(10) NOT NULL,
  `DESCRIPCION_CONCEPTO` varchar(255) default NULL,
  `RUBRO` varchar(2) default NULL,
  PRIMARY KEY  (`CVE_CONCEPTO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_contratistas` */

DROP TABLE IF EXISTS `c_contratistas`;

CREATE TABLE `c_contratistas` (
  `RFC` varchar(25) NOT NULL,
  `CVESEFIPLA` varchar(15) default NULL,
  `CVEMUNICIP` varchar(15) default NULL,
  `CVEHACIEND` varchar(15) default NULL,
  `NOMCONT` varchar(110) default NULL,
  PRIMARY KEY  (`RFC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_dependencias` */

DROP TABLE IF EXISTS `c_dependencias`;

CREATE TABLE `c_dependencias` (
  `CVE_DEP` int(10) unsigned NOT NULL auto_increment,
  `DESCRIPCION` varchar(90) default NULL,
  `ABREV` varchar(36) default NULL,
  `TIPO` varchar(15) default NULL,
  PRIMARY KEY  (`CVE_DEP`),
  KEY `DESCRIPCIO` USING BTREE (`DESCRIPCION`)
) ENGINE=MyISAM AUTO_INCREMENT=99284 DEFAULT CHARSET=utf8;

/*Table structure for table `c_dependencias2` */

DROP TABLE IF EXISTS `c_dependencias2`;

CREATE TABLE `c_dependencias2` (
  `CVE_DEP` int(11) NOT NULL,
  `DESCRIPCION` varchar(90) default NULL,
  `ABREV` varchar(36) default NULL,
  `TIPO` varchar(1) default NULL,
  PRIMARY KEY  (`CVE_DEP`),
  KEY `DESCRIPCIO` USING BTREE (`DESCRIPCION`)
) ENGINE=MyISAM AUTO_INCREMENT=99281 DEFAULT CHARSET=utf8;

/*Table structure for table `c_descripcion` */

DROP TABLE IF EXISTS `c_descripcion`;

CREATE TABLE `c_descripcion` (
  `CVE_DSC` int(10) unsigned NOT NULL auto_increment,
  `DESCRIPCION` varchar(100) NOT NULL,
  PRIMARY KEY  (`CVE_DSC`),
  KEY `DESCRIPCIO` USING BTREE (`DESCRIPCION`)
) ENGINE=MyISAM AUTO_INCREMENT=10020 DEFAULT CHARSET=utf8;

/*Table structure for table `c_destinogasto` */

DROP TABLE IF EXISTS `c_destinogasto`;

CREATE TABLE `c_destinogasto` (
  `CVE_DESTINO_GASTO` varchar(2) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL,
  PRIMARY KEY  (`CVE_DESTINO_GASTO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `c_ejecucion` */

DROP TABLE IF EXISTS `c_ejecucion`;

CREATE TABLE `c_ejecucion` (
  `CVE_EJEC` varchar(2) NOT NULL,
  `DESCRIPCION` varchar(25) NOT NULL,
  PRIMARY KEY  (`CVE_EJEC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_financiamientos` */

DROP TABLE IF EXISTS `c_financiamientos`;

CREATE TABLE `c_financiamientos` (
  `CVE_FINTO` varchar(1) NOT NULL,
  `DESCRIPCION` varchar(40) NOT NULL,
  `ABREVIACION` varchar(10) default NULL,
  PRIMARY KEY  (`CVE_FINTO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_fondos` */

DROP TABLE IF EXISTS `c_fondos`;

CREATE TABLE `c_fondos` (
  `CVE_FON` varchar(1) NOT NULL,
  `DESCRIPCION` varchar(80) NOT NULL,
  `ABREV` varchar(10) default NULL,
  `CVE_FINTO` varchar(50) default NULL,
  PRIMARY KEY  (`CVE_FON`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_localidades` */

DROP TABLE IF EXISTS `c_localidades`;

CREATE TABLE `c_localidades` (
  `CVE_MUN` varchar(3) NOT NULL,
  `CVE_LOC` varchar(4) NOT NULL,
  `CVE_ENT` varchar(2) NOT NULL default '30',
  `NOM_LOC` varchar(45) NOT NULL,
  `NMUNI` int(11) NOT NULL,
  `NOM_MUN` varchar(30) NOT NULL,
  PRIMARY KEY  (`CVE_MUN`,`CVE_LOC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_movmetas` */

DROP TABLE IF EXISTS `c_movmetas`;

CREATE TABLE `c_movmetas` (
  `CLAVE` varchar(2) NOT NULL,
  `DSC_MOV_META` varchar(15) NOT NULL,
  PRIMARY KEY  (`CLAVE`),
  KEY `Clave` USING BTREE (`CLAVE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_municipios` */

DROP TABLE IF EXISTS `c_municipios`;

CREATE TABLE `c_municipios` (
  `CVE_MUNI` int(10) unsigned NOT NULL,
  `NOMBRE` varchar(36) NOT NULL,
  `REGION` varchar(35) default NULL,
  PRIMARY KEY  (`CVE_MUNI`),
  KEY `NOMBRE` (`NOMBRE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_obraacc` */

DROP TABLE IF EXISTS `c_obraacc`;

CREATE TABLE `c_obraacc` (
  `CVE_OBRA_ACC` varchar(1) NOT NULL,
  `DSC_OBRA_ACC` varchar(50) default NULL,
  PRIMARY KEY  (`CVE_OBRA_ACC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_programas` */

DROP TABLE IF EXISTS `c_programas`;

CREATE TABLE `c_programas` (
  `CVE_PROG` varchar(2) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL,
  `CVE_FON` varchar(1) default NULL,
  `DESCRIPCION2001` varchar(100) default NULL,
  `DESCRIPCION2002` varchar(100) default NULL,
  `CVE_FINTO` varchar(1) NOT NULL,
  `ORDEN` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`CVE_PROG`),
  KEY `CVE_PROG` USING BTREE (`CVE_PROG`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_proveedores` */

DROP TABLE IF EXISTS `c_proveedores`;

CREATE TABLE `c_proveedores` (
  `RFC` varchar(16) NOT NULL,
  `NOMBRE` varchar(50) default NULL,
  `DIRECCION` varchar(50) default NULL,
  `TELEFONO` varchar(20) default NULL,
  PRIMARY KEY  (`RFC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_puestos` */

DROP TABLE IF EXISTS `c_puestos`;

CREATE TABLE `c_puestos` (
  `CVE_PUESTO` int(10) unsigned NOT NULL auto_increment,
  `DESCRIPCION` varchar(50) default NULL,
  PRIMARY KEY  (`CVE_PUESTO`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

/*Table structure for table `c_puestos_comite` */

DROP TABLE IF EXISTS `c_puestos_comite`;

CREATE TABLE `c_puestos_comite` (
  `CVE_PUESTO` int(10) unsigned NOT NULL auto_increment,
  `DESCRIPCION` varchar(60) NOT NULL,
  PRIMARY KEY  (`CVE_PUESTO`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `c_rubrogasto` */

DROP TABLE IF EXISTS `c_rubrogasto`;

CREATE TABLE `c_rubrogasto` (
  `CVE_PROG` varchar(2) NOT NULL,
  `CVE_RUBRO_GASTO` int(11) unsigned NOT NULL auto_increment,
  `DESCRIPCION` varchar(100) NOT NULL,
  PRIMARY KEY  (`CVE_RUBRO_GASTO`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

/*Table structure for table `c_rubros` */

DROP TABLE IF EXISTS `c_rubros`;

CREATE TABLE `c_rubros` (
  `CVE_RUBRO` varchar(5) NOT NULL,
  `DESCRIPCION` varchar(50) default NULL,
  PRIMARY KEY  (`CVE_RUBRO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `c_situaciones` */

DROP TABLE IF EXISTS `c_situaciones`;

CREATE TABLE `c_situaciones` (
  `CVE_SIT` varchar(2) NOT NULL,
  `DESCRIPCION` varchar(45) NOT NULL,
  PRIMARY KEY  (`CVE_SIT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_subprogramas` */

DROP TABLE IF EXISTS `c_subprogramas`;

CREATE TABLE `c_subprogramas` (
  `CVE_PROG` varchar(2) NOT NULL,
  `CVE_SPRO` varchar(2) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL,
  `DESCRIPCION2001` varchar(100) default NULL,
  `DESCRIPCION2002` varchar(100) default NULL,
  `OBR_ACC` varchar(1) NOT NULL,
  `CVE_FON` varchar(1) NOT NULL,
  `CVE_FINTO` varchar(1) NOT NULL,
  PRIMARY KEY  (`CVE_PROG`,`CVE_SPRO`),
  KEY `CVE_PROG` (`CVE_PROG`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_subsubprogramas` */

DROP TABLE IF EXISTS `c_subsubprogramas`;

CREATE TABLE `c_subsubprogramas` (
  `CVE_PROG` varchar(2) NOT NULL,
  `CVE_SPRO` varchar(2) NOT NULL,
  `CVE_SSPRO` varchar(1) NOT NULL,
  `DESCRIPCION` varchar(100) default NULL,
  `DESCRIPCION2001` varchar(100) default NULL,
  `DESCRIPCION2002` varchar(100) default NULL,
  `OBR_ACC` varchar(1) default NULL,
  `CVE_FON` varchar(1) default NULL,
  PRIMARY KEY  (`CVE_PROG`,`CVE_SPRO`,`CVE_SSPRO`),
  KEY `CVE_PROG` (`CVE_PROG`),
  KEY `CVE_SPRO` (`CVE_SPRO`),
  KEY `CVE_SSPRO` (`CVE_SSPRO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_tipogasto` */

DROP TABLE IF EXISTS `c_tipogasto`;

CREATE TABLE `c_tipogasto` (
  `CVE_TIPO_GASTO` int(11) unsigned NOT NULL auto_increment,
  `TIPO_GASTO` varchar(100) NOT NULL,
  PRIMARY KEY  (`CVE_TIPO_GASTO`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Table structure for table `c_tipometa` */

DROP TABLE IF EXISTS `c_tipometa`;

CREATE TABLE `c_tipometa` (
  `CVE_TIPO_META` varchar(1) NOT NULL,
  `DSC_TIPO_META` varchar(10) NOT NULL,
  PRIMARY KEY  (`CVE_TIPO_META`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `c_tipomovimiento` */

DROP TABLE IF EXISTS `c_tipomovimiento`;

CREATE TABLE `c_tipomovimiento` (
  `CVE_TIPO_MOVIMIENTO` varchar(10) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL,
  PRIMARY KEY  (`CVE_TIPO_MOVIMIENTO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `c_unidadesmedida` */

DROP TABLE IF EXISTS `c_unidadesmedida`;

CREATE TABLE `c_unidadesmedida` (
  `CVE_UMED` int(10) unsigned NOT NULL,
  `NOMBRE_S` varchar(50) NOT NULL,
  `NOMBRE_P` varchar(50) NOT NULL,
  `X` int(10) unsigned default '0',
  PRIMARY KEY  (`CVE_UMED`),
  KEY `NOMBRE_S` (`NOMBRE_S`)
) ENGINE=MyISAM AUTO_INCREMENT=733 DEFAULT CHARSET=utf8;

/*Table structure for table `c_usuarios` */

DROP TABLE IF EXISTS `c_usuarios`;

CREATE TABLE `c_usuarios` (
  `ID_USUARIO` int(10) unsigned NOT NULL auto_increment,
  `LOGIN` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `NOMBRE` varchar(150) NOT NULL,
  `ESTATUS` varchar(2) NOT NULL,
  `ROL` varchar(15) NOT NULL,
  `FECHA_ALTA` datetime NOT NULL,
  `CVE_MUNI` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=425 DEFAULT CHARSET=utf8;

/*Table structure for table `r_avancefisico` */

DROP TABLE IF EXISTS `r_avancefisico`;

CREATE TABLE `r_avancefisico` (
  `NUM_OBRA` int(10) unsigned NOT NULL,
  `FECHA_AVANCE` datetime NOT NULL,
  `AVANCE_FISICO` double NOT NULL,
  `OBSERVACIONES` varchar(185) default NULL,
  `CVE_AVANCE` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`CVE_AVANCE`),
  KEY `NUM_OBRA` (`NUM_OBRA`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `r_comites` */

DROP TABLE IF EXISTS `r_comites`;

CREATE TABLE `r_comites` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `NUM_OBRA` int(10) unsigned NOT NULL,
  `CVE_PUESTO` varchar(45) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `DIRECCION` varchar(70) NOT NULL,
  `TELEFONO` varchar(20) NOT NULL,
  `CVE_MUNI` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `r_conceptos` */

DROP TABLE IF EXISTS `r_conceptos`;

CREATE TABLE `r_conceptos` (
  `NUM_OBRA` int(10) unsigned default NULL,
  `NUMERO_POLIZA` int(11) default '0',
  `CVE_APORTACION` varchar(1) default NULL,
  `FECHA_FACTURA` datetime default NULL,
  `FOLIO_FACTURA` varchar(25) default NULL,
  `PROVEEDOR` varchar(16) default NULL,
  `IMPORTE` double default '0',
  `CVE_CONCEPTO` varchar(10) default NULL,
  `FECHA_REGISTRO` datetime default NULL,
  `CVE_COMPROBACION` int(10) unsigned NOT NULL auto_increment,
  `TIPO_EJECUCION` varchar(2) NOT NULL,
  PRIMARY KEY  (`CVE_COMPROBACION`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `r_consejofirmas` */

DROP TABLE IF EXISTS `r_consejofirmas`;

CREATE TABLE `r_consejofirmas` (
  `ID_MUNI` int(10) unsigned NOT NULL,
  `NOMBRE_PRESIDENTE` varchar(45) NOT NULL,
  `NOMBRE_CONTRALOR` varchar(45) NOT NULL,
  `NOMBRE_VOCAL_CONTROL_VIGILANCIA` varchar(45) NOT NULL,
  PRIMARY KEY  (`ID_MUNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `r_consejos` */

DROP TABLE IF EXISTS `r_consejos`;

CREATE TABLE `r_consejos` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `CVE_MUNI` int(10) unsigned default NULL,
  `CVE_PUESTO` varchar(45) default NULL,
  `NOMBRE` varchar(60) default NULL,
  `DIRECCION` varchar(80) default NULL,
  `TELEFONO` varchar(20) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Table structure for table `r_historial_ejecucion` */

DROP TABLE IF EXISTS `r_historial_ejecucion`;

CREATE TABLE `r_historial_ejecucion` (
  `ID_MOVIMIENTO` int(10) unsigned NOT NULL auto_increment,
  `NUMERO_OBRA` varchar(10) NOT NULL,
  `TIPO_EJECUCION` varchar(2) NOT NULL,
  `FECHA_MODIFICACION` date NOT NULL,
  `OFICIO_MODIFICACION` varchar(12) NOT NULL,
  PRIMARY KEY  (`ID_MOVIMIENTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Table structure for table `r_metas` */

DROP TABLE IF EXISTS `r_metas`;

CREATE TABLE `r_metas` (
  `NUM_OBRA` int(10) unsigned NOT NULL,
  `TIPO_META` varchar(1) NOT NULL default 'P',
  `TIPO_MOV_META` varchar(2) NOT NULL,
  `CVE_UMED` int(10) unsigned NOT NULL default '0',
  `CANTIDAD` double NOT NULL,
  `OFICIO` varchar(12) NOT NULL default '0',
  `FECHA_CAPTURA` datetime NOT NULL,
  `CVE_META` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`CVE_META`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `r_movimientos` */

DROP TABLE IF EXISTS `r_movimientos`;

CREATE TABLE `r_movimientos` (
  `NUM_OBRA` int(10) unsigned NOT NULL,
  `CVE_APORTACION` varchar(45) NOT NULL,
  `CLAVE` varchar(45) NOT NULL,
  `TIPO_OFICIO` varchar(45) NOT NULL,
  `IMPORTE` double NOT NULL,
  `OFICIO` varchar(12) NOT NULL,
  `FECHA_MOVIMIENTO` datetime NOT NULL,
  `FECHA_REGISTRO` datetime NOT NULL,
  `CVE_MOVIMIENTO` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`CVE_MOVIMIENTO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Table structure for table `r_munidep` */

DROP TABLE IF EXISTS `r_munidep`;

CREATE TABLE `r_munidep` (
  `CVE_REL_MUNIDEP` int(11) unsigned NOT NULL auto_increment,
  `CVE_MUNI` int(11) unsigned NOT NULL,
  `CVE_DEP` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`CVE_REL_MUNIDEP`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

/*Table structure for table `r_obras` */

DROP TABLE IF EXISTS `r_obras`;

CREATE TABLE `r_obras` (
  `NUM_OBRA` int(10) unsigned NOT NULL,
  `CVE_DSC` int(10) unsigned NOT NULL,
  `DSC_OBRA` varchar(250) NOT NULL,
  `CVE_SECT` varchar(45) default NULL,
  `CVE_PROG` varchar(45) NOT NULL,
  `CVE_SPROG` varchar(45) NOT NULL,
  `CVE_SSPROG` varchar(45) default NULL,
  `CVE_MUNI` int(10) unsigned NOT NULL,
  `DSC_LOCA` varchar(45) NOT NULL,
  `CVE_LOCA` varchar(45) default NULL,
  `UMED_BENEFICIARIOS` varchar(45) NOT NULL,
  `BENEFICIARIOS` int(10) unsigned NOT NULL,
  `CVE_SIT` varchar(45) NOT NULL,
  `CVE_FINTO` varchar(45) NOT NULL,
  `CVE_SMOD` varchar(45) default NULL,
  `CVE_FON` varchar(45) NOT NULL,
  `CVE_LIEST` varchar(45) default NULL,
  `CVE_INSTR` varchar(45) default NULL,
  `CVE_DEPNR` int(10) unsigned NOT NULL,
  `CVE_DEPEJ` int(10) unsigned NOT NULL,
  `CVE_EJEC` varchar(45) NOT NULL,
  `CVE_EJECAD` varchar(45) default NULL,
  `ELEGIBLE` varchar(45) default NULL,
  `TIP_PROY` varchar(45) default NULL,
  `ACTA_ENTRE` varchar(45) default NULL,
  `INIC_ESTIM` datetime NOT NULL,
  `TERM_ESTIM` datetime NOT NULL,
  `TERM_REAL` datetime default NULL,
  `INIC_REAL` datetime default NULL,
  `JORNALES` int(10) unsigned NOT NULL,
  `OBSERVACIONES` varchar(255) default NULL,
  `OBR_ACC` varchar(45) NOT NULL,
  `FEC_REG` datetime NOT NULL,
  `FEC_CAP` datetime NOT NULL,
  `NUMERO_OFICIO_APROBACION` varchar(12) NOT NULL,
  `NUMERO_OFICIO_DEPCIA_NORMATIVA` varchar(45) default NULL,
  `FECHA_OFICIO_DEPCIA_NORMATIVA` datetime default NULL,
  `TIPO_ASENTAMIENTO` varchar(45) NOT NULL,
  `TIPO_OBRA` varchar(45) default NULL,
  `REGION` varchar(45) NOT NULL,
  `CONVENIO` varchar(45) default NULL,
  `FECHA_ACTA_CDM` datetime NOT NULL,
  `NUM_ACTA_CONSEJO` varchar(45) NOT NULL,
  `CROQUIS` longblob,
  `INIC_FINAN_REAL` datetime default NULL,
  `TERM_FINAN_REAL` datetime default NULL,
  `ATRIBUTO_01` varchar(45) default NULL,
  `ATRIBUTO_02` varchar(45) default NULL,
  `ATRIBUTO_03` varchar(45) default NULL,
  `ATRIBUTO_04` varchar(45) default NULL,
  `ATRIBUTO_05` varchar(45) default NULL,
  `NOMBRE_IMG_CROQUIS` varchar(60) default NULL,
  `CONTENT_TYPE_ARCHIVO` varchar(20) default NULL,
  `ID_USUARIO` int(10) unsigned NOT NULL,
  `CVE_RUBRO` int(10) unsigned default NULL,
  `CVE_TIPO_GASTO` varchar(2) NOT NULL,
  `CVE_RUBRO_GASTO` int(11) unsigned NOT NULL,
  `CVE_DESTINO_GASTO` varchar(2) NOT NULL,
  PRIMARY KEY  (`NUM_OBRA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `r_pagos` */

DROP TABLE IF EXISTS `r_pagos`;

CREATE TABLE `r_pagos` (
  `NUM_OBRA` int(10) unsigned NOT NULL,
  `RECIBO` int(11) default '0',
  `NUMERO_POLIZA` int(11) NOT NULL default '0',
  `NUMERO_CONTRATO` varchar(20) default NULL,
  `TIPO_PAGO` varchar(1) default NULL,
  `CVE_APORTACION` varchar(1) NOT NULL default '',
  `DESCRIPCION_TRAMITE` varchar(500) default NULL,
  `IMPORTE_BRUTO` double default '0',
  `PROGRAMA` double default '0',
  `APORTACION_NETA` double default '0',
  `IMPORTE_PARTIDA_DEUDORA` double default '0',
  `CLAVE_PARTIDA_DEUDORA` varchar(1) default NULL,
  `IMPUESTO_05` double default '0',
  `IMPUESTO_02` double default '0',
  `IMPUESTO_ISPT` double default '0',
  `IMPUESTO_ISR` double default '0',
  `IMPUESTO_01` double default '0',
  `SANCIONES` double default '0',
  `FECHA_PAGO` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `ESTIMACION` varchar(10) default NULL,
  `RFC` varchar(25) NOT NULL,
  `TIPO_REGISTRO_PAGO` varchar(10) NOT NULL,
  `CVE_FONDO` varchar(45) NOT NULL,
  `ESTATUS` varchar(1) NOT NULL,
  `CVE_PAGO` int(11) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`NUM_OBRA`,`CVE_APORTACION`,`RFC`,`CVE_FONDO`,`CVE_PAGO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `r_progdep` */

DROP TABLE IF EXISTS `r_progdep`;

CREATE TABLE `r_progdep` (
  `CVE_PROGDEP` int(11) unsigned NOT NULL auto_increment,
  `CVE_PROG` varchar(2) NOT NULL,
  `CVE_SPROG` varchar(2) NOT NULL,
  `CVE_SSPROG` varchar(2) NOT NULL,
  `CVE_DEP` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`CVE_PROGDEP`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Table structure for table `r_rubrodestino` */

DROP TABLE IF EXISTS `r_rubrodestino`;

CREATE TABLE `r_rubrodestino` (
  `CVE_RUBRO` int(11) unsigned NOT NULL auto_increment,
  `CVE_DESTINO` varchar(2) NOT NULL,
  PRIMARY KEY  (`CVE_RUBRO`,`CVE_DESTINO`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

/*Table structure for table `r_techofinanciero` */

DROP TABLE IF EXISTS `r_techofinanciero`;

CREATE TABLE `r_techofinanciero` (
  `CVE_MUNI` int(11) NOT NULL default '0',
  `CVE_FONDO` int(10) unsigned default '0',
  `TECHO_FINANCIERO` double default '0',
  `ANIO` int(10) unsigned NOT NULL,
  `CVE_TECHO` int(10) unsigned NOT NULL auto_increment,
  `APROBADO` double default NULL,
  `SALDO` double default NULL,
  PRIMARY KEY  (`CVE_TECHO`,`CVE_MUNI`,`ANIO`),
  KEY `Cve_Muni` USING BTREE (`CVE_MUNI`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Table structure for table `r_techofinanciero_adicional` */

DROP TABLE IF EXISTS `r_techofinanciero_adicional`;

CREATE TABLE `r_techofinanciero_adicional` (
  `CVE_MUNI` int(10) unsigned NOT NULL,
  `CVE_FONDO` int(10) unsigned NOT NULL,
  `CVE_APORTACION` varchar(2) NOT NULL,
  `TECHO_FINANCIERO` double NOT NULL,
  `APROBADO` double NOT NULL,
  `SALDO` double NOT NULL,
  `ORDEN` int(10) unsigned NOT NULL,
  `ANIO` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`CVE_MUNI`,`CVE_FONDO`,`CVE_APORTACION`,`ANIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
