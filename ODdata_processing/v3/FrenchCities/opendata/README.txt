Fichiers sous licence ODbL mis � disposition par Montpellier M�dit�rran�e M�tropole :
- EDGT 34 - TOTAL - Dico - 17112014.xls
- EDGT34_TOTAL_PERSONNES.TXT
- EDGT34_TOTAL_DEPLACEMENTS.TXT
- secteur_tirage.shp

http://data.montpellier3m.fr/dataset/enquete-menages-deplacements

T�l�charg�s le 12 mars 2019

L'�quipe du Mobiliscope met � disposition un script R (1_txt2r.R) pour transformer les donn�es brutes (fichiers .txt "d�placements" et "personnes")
au format RDS qui est le format utilis� pour toutes les pr�parations des donn�es du Mobiliscope.



Les donn�es g�ographiques ont �galement n�cessit� une pr�paration avant leur utilisation sous R:
- dissociation des secteurs de l'enqu�te de Montpellier (EDGT, 2104) de ceux de B�ziers (EDVM, 2014)
- v�rification du codage des secteurs (type et longueur)
- calcul des centro�des (x et y) des secteurs en WGS84
- standardisation des variables de la table attributaire (nombre, nom et ordre)
- cr�ation des libell�s des secteurs
