-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: sima
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cruge_authitemchild`
--

DROP TABLE IF EXISTS `cruge_authitemchild`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cruge_authitemchild`
--

LOCK TABLES `cruge_authitemchild` WRITE;
/*!40000 ALTER TABLE `cruge_authitemchild` DISABLE KEYS */;
INSERT INTO `cruge_authitemchild` VALUES ('SistemaCapturista','action_catCompany_create'),('SistemaCapturista','action_catMarcaCelular_create'),('SistemaCapturista','action_catMarcaCelular_view'),('SistemasOperador','action_catMarcaCelular_view'),('SistemaCapturista','action_catMarcaMonitor_create'),('SistemaCapturista','action_catMarcaMonitor_updateEditable'),('SistemaCapturista','action_catMarcaMonitor_view'),('SistemasOperador','action_catMarcaMonitor_view'),('SistemaCapturista','action_catMarca_admin'),('SistemasOperador','action_catMarca_admin'),('SistemaCapturista','action_catMarca_create'),('SistemaCapturista','action_catMarca_updateEditable'),('SistemaCapturista','action_catSoftware_admin'),('SistemasOperador','action_catSoftware_admin'),('SistemaCapturista','action_catSoftware_create'),('SistemaCapturista','action_catSoftware_delete'),('SistemaCapturista','action_catSoftware_update'),('SistemaCapturista','action_catSoftware_updateEditable'),('SistemaCapturista','action_catSoftware_view'),('SistemasOperador','action_catSoftware_view'),('SistemaCapturista','action_catTelefoniaCelular_admin'),('SistemasOperador','action_catTelefoniaCelular_admin'),('SistemaCapturista','action_catTelefoniaCelular_create'),('SistemaCapturista','action_catTelefoniaCelular_index'),('SistemasOperador','action_catTelefoniaCelular_index'),('SistemaCapturista','action_catTelefoniaCelular_update'),('SistemaCapturista','action_catTipoPlanCelular_create'),('SistemaCapturista','action_catTipoSoporte_admin'),('SistemasOperador','action_catTipoSoporte_admin'),('SistemaCapturista','action_catTipoSoporte_create'),('SistemasOperador','action_compras_proveedor_admin'),('SistemasOperador','action_compras_proveedor_view'),('SistemasOperador','action_configuracion_default_index'),('SistemaCapturista','action_equipoComputo_admin'),('SistemasOperador','action_equipoComputo_admin'),('SistemaCapturista','action_equipoComputo_almacenesPorEntidad'),('SistemaCapturista','action_equipoComputo_create'),('SistemaCapturista','action_equipoComputo_createForm'),('SistemaCapturista','action_equipoComputo_garcaMonitorList'),('SistemaCapturista','action_equipoComputo_getMarcaList'),('SistemaCapturista','action_equipoComputo_getProveedorSistemasList'),('SistemaCapturista','action_equipoComputo_getTipoEquipoList'),('SistemaCapturista','action_equipoComputo_index'),('SistemasOperador','action_equipoComputo_index'),('SistemaCapturista','action_equipoComputo_printLabel'),('SistemaCapturista','action_equipoComputo_update'),('SistemaCapturista','action_equipoComputo_updateEditable'),('SistemaCapturista','action_equipoComputo_updateForm'),('SistemaCapturista','action_equipoComputo_view'),('SistemasOperador','action_equipoComputo_view'),('tarea_ordenesSoporte_observaciones','action_observacionesOrdenSoporte_createPopup'),('tarea_ordenesSoporte_observaciones','action_observacionesOrdenSoporte_updateEditable'),('tarea_ordenesSoporte_observaciones','action_observacionesOrdenSoporte_view'),('tarea_ordenesSoporte_observaciones','action_observacionesOrdenSoporte_viewPopup'),('SistemaCapturista','action_ordenesSoporte_activarOrden'),('SistemasOperador','action_ordenesSoporte_activarOrden'),('SistemaCapturista','action_ordenesSoporte_admin'),('SistemasOperador','action_ordenesSoporte_admin'),('SistemaCapturista','action_ordenesSoporte_almacenesPorEntidad'),('SistemasOperador','action_ordenesSoporte_almacenesPorEntidad'),('SistemaCapturista','action_ordenesSoporte_create'),('SistemasOperador','action_ordenesSoporte_create'),('SistemaCapturista','action_ordenesSoporte_delete'),('SistemasOperador','action_ordenesSoporte_FinalizarOrden'),('SistemasOperador','action_ordenesSoporte_firma'),('SistemaCapturista','action_ordenesSoporte_getTipoSoporteList'),('SistemasOperador','action_ordenesSoporte_getTipoSoporteList'),('SistemaCapturista','action_ordenesSoporte_index'),('SistemasOperador','action_ordenesSoporte_index'),('SistemasOperador','action_ordenesSoporte_iniciarOrden'),('SistemasOperador','action_ordenesSoporte_listadoParaImprimir'),('SistemaCapturista','action_ordenesSoporte_mobileAdmin'),('SistemaCapturista','action_ordenesSoporte_save'),('SistemasOperador','action_ordenesSoporte_save'),('SistemaCapturista','action_ordenesSoporte_scan'),('SistemasOperador','action_ordenesSoporte_scan'),('SistemaCapturista','action_ordenesSoporte_update'),('SistemasOperador','action_ordenesSoporte_update'),('SistemaCapturista','action_ordenesSoporte_updateEditable'),('SistemasOperador','action_ordenesSoporte_updateEditable'),('SistemaCapturista','action_ordenesSoporte_view'),('SistemasOperador','action_ordenesSoporte_view'),('SistemaCapturista','action_serviciosinstitucionales_default_index'),('Invitado','action_site_error'),('Invitado','action_site_index'),('Invitado','action_site_login'),('Invitado','action_site_logout'),('SistemaCapturista','action_telefoniaCelular_admin'),('SistemasOperador','action_telefoniaCelular_admin'),('SistemaCapturista','action_telefoniaCelular_create'),('SistemaCapturista','action_telefoniaCelular_getMarcaCelularList'),('SistemaCapturista','action_telefoniaCelular_index'),('SistemasOperador','action_telefoniaCelular_index'),('SistemaCapturista','action_telefoniaCelular_update'),('cruge_access','action_ui_editprofile'),('sysadmin','action_ui_editprofile'),('cruge_access','action_ui_fieldsadmincreate'),('sysadmin','action_ui_fieldsadmincreate'),('cruge_access','action_ui_fieldsadminlist'),('sysadmin','action_ui_fieldsadminlist'),('cruge_access','action_ui_rbacajaxassignment'),('sysadmin','action_ui_rbacajaxassignment'),('cruge_access','action_ui_rbacajaxsetchilditem'),('sysadmin','action_ui_rbacajaxsetchilditem'),('cruge_access','action_ui_rbacauthitemchilditems'),('sysadmin','action_ui_rbacauthitemchilditems'),('cruge_access','action_ui_rbacauthitemcreate'),('sysadmin','action_ui_rbacauthitemcreate'),('cruge_access','action_ui_rbacauthitemdelete'),('sysadmin','action_ui_rbacauthitemdelete'),('cruge_access','action_ui_rbacauthitemupdate'),('sysadmin','action_ui_rbacauthitemupdate'),('cruge_access','action_ui_rbaclistops'),('sysadmin','action_ui_rbaclistops'),('cruge_access','action_ui_rbaclistroles'),('sysadmin','action_ui_rbaclistroles'),('cruge_access','action_ui_rbaclisttasks'),('sysadmin','action_ui_rbaclisttasks'),('cruge_access','action_ui_rbacusersassignments'),('sysadmin','action_ui_rbacusersassignments'),('cruge_access','action_ui_sessionadmin'),('sysadmin','action_ui_sessionadmin'),('cruge_access','action_ui_sessionadmindelete'),('sysadmin','action_ui_sessionadmindelete'),('cruge_access','action_ui_systemupdate'),('sysadmin','action_ui_systemupdate'),('cruge_access','action_ui_usermanagementadmin'),('sysadmin','action_ui_usermanagementadmin'),('cruge_access','action_ui_usermanagementcreate'),('sysadmin','action_ui_usermanagementcreate'),('cruge_access','action_ui_usermanagementupdate'),('sysadmin','action_ui_usermanagementupdate'),('sysadmin','admin'),('tarea_test_uno','controller_administracion'),('tarea_test_uno','controller_administrativo'),('tarea_test_uno','controller_app'),('tarea_test_uno','controller_article'),('tarea_test_uno','controller_cargos'),('Invitado','controller_catentidad'),('sysadmin','controller_catentidad'),('sysadmin','controller_insidesite'),('sysadmin','controller_post'),('sysadmin','controller_proveedores'),('sysadmin','controller_site'),('tarea_test_uno','controller_site'),('tarea_test_uno','controller_usersmodulosgenerales'),('Invitado','controller_usuarios'),('sysadmin','controller_usuarios'),('sysadmin','cruge_access'),('sysadmin','edit-advanced-profile-features'),('SistemaCapturista','tarea_ordenesSoporte_observaciones'),('SistemasOperador','tarea_ordenesSoporte_observaciones'),('sysadmin','tarea_test_uno');
/*!40000 ALTER TABLE `cruge_authitemchild` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-23 16:47:50
