<div class="addi-opts" id="add_options">

                                <ul class="list-opt clearfix"><li><span>Advanced Options</span></li></ul>

                               

                              

                                    <ul class="list-opt clearfix">

                                    <?php
									foreach($productoptions as $option)

									{

									$optiondetails=$obj->getProductOptionsById($option['idOption']);
									if($optiondetails['optionname'] != ""){
									?>
			
                        					
                <div class="col-md-3 abc clearfix">
				<div class="cms-cont pdcteach <?php if($i==0){?>active<?php } ?>">
				
                                        <li class="opns" data-pdctid="<?php echo $option['idProduct']?>">

                                       <input type="radio" id="dyn_menus_<?php echo $option['idOption'];?>" data-pdct="<?php echo $option['idProduct']?>" value="<?php echo $optiondetails['optionname'];?> <span>[<?php echo $currency.$optiondetails['optionPrice'];?>]</span>" name="html_options[]" class="check-opt" data="<?php echo $optiondetails['optionname'];?>" data-cost2="<?php echo number_format($optiondetails['optionPrice'],2);?>">
									   <i class="<?php echo $optiondetails['optionImage'];?>"></i>
									   <h5><?php echo $optiondetails['optionname'];?></h5>
									   
                                       <?php if($show_price==1){?>
									   <p id="price-pk<?php echo $option['idproduct'];?>" data-price="<?php echo $optiondetails['optionPrice'];?>"><span><?php echo $currency?></span><?php echo number_format($optiondetails['optionPrice'],2);?></p>
                                       <!--span>[<?php echo $currency.$optiondetails['optionPrice'];?>]</span-->
									   
										<?php } ?>
                                    </li> 
									
									</div>
									</div>
							

                                        <?php
											}
$i++;
									
									}

									?>

                                   </ul>

                                   

                            	

                        
							</div>