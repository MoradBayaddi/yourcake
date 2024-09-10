TYPE=VIEW
query=select `yourcake`.`comande`.`IdClient` AS `IdClient` from (`yourcake`.`c` join `yourcake`.`comande` on(`yourcake`.`c`.`idCommande` = `yourcake`.`comande`.`idCommande`)) group by `yourcake`.`comande`.`IdClient` having count(`yourcake`.`c`.`idCommande`) = 11
md5=2ebd4a09d8b7e2be9ef23be08fc92b74
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=0001676845850830613
create-version=2
source=SELECT `comande`.`IdClient` AS `IdClient` FROM (`c` join `comande` on(`c`.`idCommande` = `comande`.`idCommande`)) GROUP BY `comande`.`IdClient` HAVING count(`c`.`idCommande`) = 11
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `yourcake`.`comande`.`IdClient` AS `IdClient` from (`yourcake`.`c` join `yourcake`.`comande` on(`yourcake`.`c`.`idCommande` = `yourcake`.`comande`.`idCommande`)) group by `yourcake`.`comande`.`IdClient` having count(`yourcake`.`c`.`idCommande`) = 11
mariadb-version=100427
