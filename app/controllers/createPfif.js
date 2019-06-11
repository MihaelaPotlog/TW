const formular = document.getElementById('formularPF');
formular.addEventListener('submit', createPfif);
function createPfif(e) {
	e.preventDefault();
	const pic = document.getElementById('pic').value;
	const fname = document.getElementById('fname').value;
	const lname = document.getElementById('lname').value;
	const gender = document.getElementById('gender').value;
	const birth = document.getElementById('birth').value;
	const place = document.getElementById('place').value;
	const socialMedia = document.getElementById('social-media').value;
	const timeRegistration = document.getElementById('time-registration').value;
	const yourName = document.getElementById('yourname').value;
	const adress = document.getElementById('adress').value;
	const extra = document.getElementById('extra').value;

	const Pfif = document.implementation.createDocument('', '', null);
	const header = Pfif.createElement('pfif:pfif');
	header.setAttribute('xmlns:pfif', 'http://zesty.ca/pfif/1.4');

	const person = Pfif.createElement('pfif:person');

	const recordId = Pfif.createElement('pfif:person_record_id');
	recordId.innerHTML = 'test.personfinder.google.org/person.' + fname.toUpperCase() + lname.toUpperCase();
	person.appendChild(recordId);

	const authorName = Pfif.createElement('pfif:author_name');
	authorName.innerHTML = yourName;
	person.appendChild(authorName);

	const sourceDate = Pfif.createElement('pfif:source_date');
	sourceDate.innerHTML = timeRegistration;
	person.appendChild(sourceDate);

	const fullName = Pfif.createElement('pfif:full_name');
	fullName.innerHTML = `${fname} ${lname}`;
	person.appendChild(fullName);

	const sex = Pfif.createElement('pfif:sex');
	sex.innerHTML = gender;
	person.appendChild(sex);

	const dateOfBirth = Pfif.createElement('pfif:date_of_birth');
	dateOfBirth.innerHTML = birth;
	person.appendChild(dateOfBirth);

	const homeStreet = Pfif.createElement('pfif:home_street');
	homeStreet.innerHTML = adress;
	person.appendChild(homeStreet);

	const photoURL = Pfif.createElement('pfif:photo_url');
	photoURL.innerHTML = pic;
	person.appendChild(photoURL);

	const profileURLs = Pfif.createElement('pfif:profile_urls');
	profileURLs.innerHTML = socialMedia;
	person.appendChild(profileURLs);

	const note = Pfif.createElement('pfif:note');

	const noteId = Pfif.createElement('pfif:note_record_id');
	noteId.innerHTML = 'test.personfinder.google.org/note.' + lname + timeRegistration;
	note.appendChild(noteId);

	const persNoteId = Pfif.createElement('pfif:person_record_id');
	persNoteId.innerHTML = 'test.personfinder.google.org/person.' + fname.toUpperCase() + lname.toUpperCase();
	note.appendChild(persNoteId);

	const authorNameNote = Pfif.createElement('pfif:author_name');
	authorNameNote.innerHTML = yourName;
	note.appendChild(authorNameNote);

	const sourceDateNote = Pfif.createElement('pfif:source_date');
	sourceDateNote.innerHTML = timeRegistration;
	note.appendChild(sourceDateNote);

	const lastKnownLocation = Pfif.createElement('pfif:last_known_location');
	lastKnownLocation.innerHTML = place;
	note.appendChild(lastKnownLocation);

	const text = Pfif.createElement('pfif:text');
	text.innerHTML = extra;
	note.appendChild(text);

	person.appendChild(note);
	header.appendChild(person);

	sendToServer(Pfif);
}

function sendToServer(Pfif) {
	const serializer = new XMLSerializer();
	const xmlString = serializer.serializeToString(Pfif);
	const xhr = new XMLHttpRequest();
	xhr.open('POST', '../app/models/FusionTabelModel.php?request=insert', true);
	xhr.setRequestHeader('Content-Type', 'text/xml');
	xhr.send(xmlString);
	console.log('sent');
	formular.reset();
}
