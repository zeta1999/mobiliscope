Les scripts R s'utilisent dans leur ordre d'apparition dans le dossier (exemple pour les donn�es de Montr�al) :

	- 1_pr�traitements_QC.R : nettoyage des donn�es brutes et cr�ation de nouvelles variables
		- en entr�e : mtl13_niveau_2.csv
		- en sortie : BD_Mtl.RDS

	- 1b_hrearv.R : fonction utilis�e par le script "1_pr�traitements_QC.R" pour cr�er les heures d'arriv�es manquantes

	- 2_creationBD_mobil_QC : cr�ation de la BD mobiliscope standardis�e : tables de d�placements et d'individus
		- en entr�e : BD_Mtl.RDS
		- en sortie : BD_mobiliscope_depl_MONTREAL.RDS et 	BD_mobiliscope_pers_MONTREAL.RDS

	- 3_deplToPresence.R : cr�ation de la table de pr�sence
		 - en entr�e : BD_mobiliscope_depl_MONTREAL.RDS et 		BD_mobiliscope_pers_MONTREAL.RDS
		 - en sortie : table_presence.RDS

	- 3_deplToPresence_fct.R : fonctions utilis�es par le script du m�me nom

	- 4_p2m.R : cr�ation des csv et geojson lus par l'application Mobiliscope
		 - en entr�e : table_presence.RDS
		 - en sortie : www/data/MONTREAL/...

	- 4_p2m_fct.R : fonctions utilis�es par le script du m�me nom

	- 6_listComSearch_QC : actualisation de la liste des communes incluses dans le Mobiliscope pour l'outil "Search" avec l'int�gration des municipalit�s incluses dans les enqu�tes qu�b�coises


Warning : 
Penser � fermer R entre chaque grande �tape et charger seulement les "library" du script concern�, sinon certaines fonctions sont cach�es des "library" et le script renvoie une erreur.
