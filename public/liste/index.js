const data = document.getElementById('lesEtudiants');

const lesEtudiants = JSON.parse(data.textContent);

const lesLignes = document.getElementById('lesLignes');

for (const etudiant of lesEtudiants) {

    // Création de la ligne
    const ligne = document.createElement('tr');

    // Nom et prénom
    const nomPrenom = document.createElement('td');
    nomPrenom.textContent = etudiant.nom + ' ' + etudiant.prenom;

    // Sexe
    const sexe = document.createElement('td');
    sexe.classList.add('col-sexe');
    sexe.textContent = etudiant.sexe;

    // Date de naissance
    const naissance = document.createElement('td');
    naissance.classList.add('col-naissance');
    naissance.textContent = etudiant.dateNaissance;

    // Option
    const option = document.createElement('td');
    option.textContent = etudiant.libelleCourt;

    // Photo
    const cellulePhoto = document.createElement('td');

    const image = document.createElement('img');

    const photo = etudiant.photo ?? '0.png';

    image.src = '/data/photo/' + encodeURIComponent(photo);
    image.alt = etudiant.nom + ' ' + etudiant.prenom;

    cellulePhoto.appendChild(image);

    // Ajout des cellules dans la ligne
    ligne.appendChild(nomPrenom);
    ligne.appendChild(sexe);
    ligne.appendChild(naissance);
    ligne.appendChild(option);
    ligne.appendChild(cellulePhoto);

    // Ajout de la ligne dans le tableau
    lesLignes.appendChild(ligne);
}