Les scripts R s'utilisent dans leur ordre d'apparition dans le dossier :

	- 1_text2r.R : transformation des donn�es sources au format R
		- en entr�e : EDGT34_TOTAL_DEPLACEMENTS.txt et EDGT34_TOTAL_PERSONNES.txt
		- en sortie : BD_brute_depl.RDS et BD_brute_pers.RDS

	- 2_createBDmobil.R : cr�ation de la BD mobiliscope (nettoyage des donn�es brutes et cr�ation de nouvelles variables)
		- en entr�e : BD_brute_depl.RDS et BD_brute_pers.RDS
		- en sortie : BD_mobiliscope_depl.RDS et BD_mobiliscope_pers.RDS

	- 2b_zonage_residentialArea.R : pr�paration de l'indicateur "Residential Area"

	- 3_deplToPresence.R : cr�ation de la table de pr�sence
		- en entr�e : BD_mobiliscope_depl.RDS et BD_mobiliscope_pers.RDS
		- en sortie : table_presence.RDS

	- 3_deplToPresence_fct.R : fonctions utilis�es par le script du m�me nom

	- 4_p2m.R : cr�ation des csv et geojson lus par l'application Mobiliscope
		- en entr�e : table_presence.RDS
		- en sortie : www/data/MONTPELLIER/...

	- 4_p2m_fct.R : fonctions utilis�es par le script du m�me nom

	- listComSearch.R : cr�ation de la liste des communes inclues dans les p�rim�tres d'enqu�te