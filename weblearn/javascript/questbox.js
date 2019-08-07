	console.log('questbox.js ready!');

	Vue.component('neptunetemp', {

		template: `	<div class="batch1questbox">
					<span class="buttonClose" onclick="closediv()">X</span>
					<div class="imageship">
						<table>
							<tr>
								<td>Unlock requirement: 20 Royal Navy Frontline Ship</td>
							</tr>

							<tr>
								<td>Earn 1M experience from sorties with Royal Navy</td>
							</tr>
							<tr>
								<td>Complete 5 Research Projects</td>
							</tr>
							<tr>
								<td>10 Blueprint</td>
							</tr>
						</table>
					</div>`

	});

	// new Vue( { el: '#neptunequestbox'})

	// Vue.component('closediv', {
	// 	data: function () {
	// 		return {
	// 			$("#batch1questbox").empty();
	// 		}
	// 	},

	// 	template: 	<div id="batch1questbox">
	// 				<span class="buttonClose" onclick="closediv()">X</span>
	// 				<div class="imageship">
	// 					<img width="320" height="320" v-bind:src="imagenepquest">
	// 					<table>
	// 						<tr>
	// 							<td>Unlock requirement: 20 Royal Navy Frontline Ship</td>
	// 						</tr>

	// 						<tr>
	// 							<td>Earn 1 million experience from sorties with Royal Navy</td>
	// 						</tr>
	// 						<tr>
	// 							<td>Complete 5 Research Projects</td>
	// 						</tr>
	// 						<tr>
	// 							<td>10 Blueprint</td>
	// 						</tr>
	// 					</table>	
	// 				</div>
	// })

	// new Vue {{ el: "#neptunequestbox"}}