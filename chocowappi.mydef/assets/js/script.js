const api = './assets/js/search3.json';

const stations =[];

fetch(api)
	.then(res => res.json())
	.then(data => {

		console.log('data >>>> ', data); 

		data.forEach(line => {
			stations.push(...line.stations);
		})
	});

	const searchInput = document.querySelector('.search');
	const searchOptions = document.querySelector('.options');

	function getOptions(word, stations) {

		return stations.filter(s => {
			//определить совпадает ли то что мы вбили в input

			const regex = new RegExp(word, 'gi');
			return s.name.match(regex);	
		})
	}

function displayOptions() {

	console.log('this.value >> ', this.value);

	const options = getOptions(this.value, stations);

	const html = options
	.map(station => {

		const regex = new RegExp(this.value, 'gi');
		const stationName = station.name.replace(regex,
			`<span class="opsh1">${this.value}</span>`
			)
		return `<li><span>${stationName}</span></li>`;
	})
	.slice(0, 10)
	.join('');

	searchOptions.innerHTML = this.value ? html : null;
}



searchInput.addEventListener('change', displayOptions);
searchInput.addEventListener('keyup', displayOptions);



Chocowappi = {
	showPopup: (param, element) => {

		let main_element = $('.modal__main'),
			overlay_element = $('.modal');

		if (param) {
			let product_element = $(element);

			main_element.find('[name=product-id]').val(product_element.parents('.product-parent').data('id'));

			main_element.show();
			overlay_element.show();
		} else {
			main_element.hide();
			overlay_element.hide();
		}
	},

	sendOrder: () => {

		let url = '/ajax.php',
			data = {
				'id': $('[name=product-id]').val(),
				'fio': $('[name=fio]').val(),
				'phone': $('[name=phone]').val(),
				'whatsapp': $('[name=whatsapp]').val(),
				'email': $('[name=email]').val(),
				'comment': $('[name=comment]').val(),
			};


		$.ajax({
			url: url,
			type: "POST",
			data: data,
			dataType: 'json',
			success: (response) => {
				console.log(response);

				let errorsBlock = $('.error');

				if (response.errors) {

					errorsBlock.html('');

					for (let key in response.errors) {
						errorsBlock.append(response.errors[key] + '<br>');
					}
				} else {

					$("#elements").css('display', 'none');

					if (response.res == true) {
						errorsBlock.html('Оформлен! Мы свами свяжемся');	
					}
				}
			}
		});
	},
};

$(document)
	.on('click', '.add', function () { Chocowappi.showPopup(true, this) })
	.on('click', '.send_button', function () { Chocowappi.sendOrder(); });
