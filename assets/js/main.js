selectDropdown = document.querySelector('.keywords-select');

if (selectDropdown) {
selectDropdown.innerHTML = 
"<option value='Please choose one option'>— Select One Topic —</option>"
	+ "<optgroup label='Innovation'>" +
		"<option value='Emerging Applications'>Emerging Applications</option>" +
		"<option value='Value Engineering and Life Cycle Costing'>Value Engineering and Life Cycle Costing</option>" + 
		"<option value='Progressive Material, Design and Construction Standards (ASTM, AASHTO and CSA)'>Progressive Material, Design and Construction Standards (ASTM, AASHTO and CSA)</option>" +
		"<option value='Design for Hydraulics'>Design for Hydraulics</option>" +
		"<option value='Design for Durability'>Design for Durability</option>" +
		"<option value='Foundation Design'>Foundation Design</option>" +
		"<option value='Evaluation and Load Rating'>Evaluation and Load Rating</option>" +
		"<option value='Repair and Rehabilitation'>Repair and Rehabilitation</option>" +
		"<option value='Advances in Modelling and Analytics'>Advances in Modelling and Analytics</option>" +
		"<option value='Other'>Innovation &#8211; Other</option>" +
		"<optgroup label='Accelerated Bridge Construction'>" +
		"<option value='Improvements in Construction Logistics'>Improvements in Construction Logistics</option>" +
		"<option value='Staged Construction'>Staged Construction</option>" +
		"<option value='Evolving Design and Construction Techniques'>Evolving Design and Construction Techniques</option>" +
		"<option value='Other'>Accelerated Bridge Construction &#8211; Other</option>" +
		"<optgroup label='Aesthetics'>" +
		"<option value='Geometric Design'>Geometric Design</option>" +
		"<option value='End Treatments'>End Treatments</option>" + 
		"<option value='Lighting'>Lighting</option>" +
		"<option value='Landscape Architecture'>Landscape Architecture</option>" +
		"<option value='Interior Finishes'>Interior Finishes</option>" +
		"<option value='Other'>Aesthetics &#8211; Other</option>" +
		"<optgroup label='Resilience'>" +
		"<option value='Sustainability'>Sustainability</option>" +
		"<option value='Extreme Weather Adaptation'>Extreme Weather Adaptation</option>" + 
		"<option value='Biodiversity Enhancements'>Biodiversity Enhancements</option>" +
		"<option value='Environmental and Carbon Impact'>Environmental and Carbon Impact</option>" +
		"<option value='Durability'>Durability</option>" +
		"<option value='Long-term Behavior of Structures'>Long-term Behavior of Structures</option>" +
		"<option value='Seismic'>Seismic</option>" +
		"<option value='Safety'>Safety</option>" +
		"<option value='Other'>Resilience &#8211; Other</option>";
}