create view vJlhMhsKrs as
select
    `krs`.`matakuliah` AS `Kode_Matakuliah`,
    `MHS`.`Nama` AS `Nama`,
    count(`krs`.`krs`.`StudentID`) AS `SKS`
from (
        `krs`.`mahasiswa` `MHS`
        join `krs`.`krs` on(
            `MHS`.`StudentID` = `krs`.`krs`.`StudentID`
        )
    )
group by
    `MHS`.`StudentID`,
    `MHS`.`Nama`