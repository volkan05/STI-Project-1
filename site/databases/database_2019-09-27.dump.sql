----
-- phpLiteAdmin database dump (https://bitbucket.org/phpliteadmin/public)
-- phpLiteAdmin version: 1.9.6
-- Exported: 8:47am on September 27, 2019 (UTC)
-- database file: /usr/share/nginx/databases/database.sqlite
--
-- Autheurs: Benoit Julien, Sutcu Volkan
----
BEGIN TRANSACTION;

----
-- Table structure for Message
----
CREATE TABLE 'Message' ('id_Message' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 'sujet' TEXT, 'corps' TEXT, 'date' TEXT);


----
-- Table structure for Utilisateur
----
CREATE TABLE 'Utilisateur' ('login' TEXT PRIMARY KEY NOT NULL, 'password' TEXT NOT NULL, 'valide' BOOLEAN NOT NULL, 'role' INTEGER NOT NULL, 
FOREIGN KEY (role) REFERENCES Role(nom) ON DELETE CASCADE);


----
-- Table structure for Role
----
CREATE TABLE 'Role' ('nom' TEXT PRIMARY KEY NOT NULL);


----
-- Table structure for MessageEnvoye
----
CREATE TABLE 'MessageEnvoye' ('expediteur' TEXT NOT NULL, 'recepteur' TEXT NOT NULL, 'id_Message' INTEGER NOT NULL, 
FOREIGN KEY (expediteur) REFERENCES Utilisateur(login) ON DELETE CASCADE,
FOREIGN KEY (recepteur) REFERENCES Utilisateur(login) ON DELETE CASCADE,
FOREIGN KEY (id_Message) REFERENCES Message(id_Message) ON DELETE CASCADE);


COMMIT;
