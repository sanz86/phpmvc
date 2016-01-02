<div class="grid_5">
						<h3>Booking Form</h3>
						<form id="bookingForm" method="post" action="booking/add">
							<div class="fl1">
								<div class="tmInput">
									<input name="name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
								</div>
								<div class="tmInput">
									<input name="source" placeHolder="From:" type="text" data-constraints="@NotEmpty @Required ">
								</div>
							</div>
							
							<div class="fl1">
								<div class="tmInput">
									<input name="email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
								</div>
								<div class="tmInput mr0">
									<input name="destination" placeHolder="To:" type="text" data-constraints="@NotEmpty @Required">
								</div>
							</div>
							<div class="clear"></div>
							<strong>Contact No</strong>
							<div class="tmInput">
								<input name="phone" placeHolder="" type="text" data-constraints="@NotEmpty @Required">
							</div>
							<div class="clear"></div>
							<strong>Time</strong>
							<div class="tmInput">
								<input name="time" placeHolder="" type="text" data-constraints="@NotEmpty @Required">
							</div>
							<div class="clear"></div>
							<strong>Date</strong>
							<label class="tmDatepicker">
								<input type="text" name="date"	placeHolder='Date' data-constraints="@NotEmpty @Required @Date">
							</label>
							<div class="clear"></div>
							<!------------------------------------------
							<div class="tmRadio">
								<p>Comfort</p>
								<input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
								<span>Cheap</span>
								<input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Standart</span>
								<input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Lux</span>
							</div>
							------------------------------------------------->
							
							<div class="fl1 fl2">
								<em>Adults</em>
								<select name="adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option>1</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									
									<option>5</option>
									<option>6</option>
								</select>
								
							</div>
							<div class="fl1 fl2">
								<em>Children</em>
								<select name="children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option>0</option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									
									<option>5</option>
									<option>6</option>
								</select>
							</div>
							
							<div class="tmTextarea">
								<textarea name="message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
							</div>
							<input class="btn" type="submit" value="Submit" />
							
						</form>
					</div>