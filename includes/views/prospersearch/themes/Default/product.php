<?php if($options['hideShopPageTitle']):?> <style>.page .entry-title{display:none}.page .article-title{display:none}</style> <?php endif;?> <div style="clear:both"></div> <div id="prosperShopMain"> <?php if(!$options['noSearchBar']):?> <div class="prosper_searchform"> <?php if($options['searchTitle']):?> <div class="searchSpan"><?php echo $options['searchTitle'];?></div> <?php endif;?> <div class="prosperSearchFormInputs"> <form id="prosperSearchForm" class="searchform" method="POST" action="" rel="nolink"> <input id="s" class="prospersearch-field" value="<?php echo($query?$query:'');?>" type="text" name="<?php echo $searchPost?$searchPost:'q';?>" placeholder="<?php echo isset($options['Search_Bar_Text'])?$options['Search_Bar_Text']:($searchTitle?'Search '.$searchTitle:'Search Products');?>"> <button class="prosper_searchsubmit submit" type="submit" name="submit"> <i style="font-size:16px;color:inherit" class="fa fa-search"></i> </button> </form> </div> </div> <?php endif;if($noResults&&!$query&&($params['merchant']||$params['brand'])){echo '<div class="prosperNoResults"><span>No shopping results for these filters.</span><br><br><span style="margin-top:8px;font-size:16px;">Please try a new search.</span></div>';}elseif($noResults&&$query){echo '<div class="prosperNoResults"><span>Your search - <strong>'.$query.'</strong> - did not match any shopping results.</span><br><br><span style="margin-top:8px;font-size:16px;">Suggestions:</span><br><ul style="margin-top:8px;list-style-type:disc;font-size:15px;margin-left:22px;">'.($related['merchant']||$related['brand']||$related['category']?'<li><strong><a href="'.$beginUrl.'/query/'.$query.'/"">Clear Filters</a></strong>.</li>':'').($querySuggestion?'<li>Did you mean <strong><a href="'.$beginUrl.'/query/'.$querySuggestion.'/">'.$querySuggestion.'</a></strong>?</li>':'').'<li>Make sure all words are spelled correctly.</li><li>Try different keywords.</li><li>Try more general keywords.</li><li>Try fewer keywords.</li></ul></div>';}elseif($noResults&&!$query){}elseif($filterArray){?> <div id="prosperFilterSidebar"> <div class="prosperTotalFound"> <span><?php echo number_format($totalFound).' results';?></span> </div> <?php if(!empty($pickedFacets)):?> <div class="prosperActiveFilters"> <?php echo implode('',$pickedFacets);?> </div> <?php endif;$mainCount=count($mainFilters);foreach($mainFilters as $i=>$partials){$name=$i;if($i==='category')$name='categorie';if((empty($mainFilters[$i])&&!$params[$i])){continue;}?> <ul class="prosperFilterContainer"> <li class="prosperParent" onclick="toggle_visibility('prosp<?php echo ucwords($i);?>');return false"> <a href="javascript:void(0)"> <span class="prosperArrow"> <i class="prosp<?php echo ucwords($i);?> fa fa-caret-down"></i> </span> <span class="prosperFilterName"><?php echo ucfirst($name);?></span> </a> </li> <ul id="prosp<?php echo ucwords($i);?>" class="prosperFilterList prosp<?php echo ucwords($i);?>"> <?php echo implode('',$partials);?> </ul> </ul> <?php $z++;}?> <ul class="prosperFilterContainer"> <li class="prosperParent"> <a href="javascript:void(0)" style="cursor:default"> <span class="prosperFilterName">Price</span> </a> </li> <li id="prospPercent" class="prosperFilterList prospPercent" style="width:100%"> <ul style="font-size:.95em;border:0;margin:0;width:auto"> <li class="<?php echo($params['dr']=='0,25')?'prosperActive':'prosperFilter';?>" style="line-height:18px;text-indent:6px"> <a href="<?php echo rtrim($params['dr']&&$params['dr']=='0,25'?str_replace('/page/'.$params['page'],'',$dRangeUrl):$dRangeUrl.'/dr/'.rawurlencode('0,25'));?>/">Under $25</a> </li> <li class="<?php echo($params['dr']=='25,50')?'prosperActive':'prosperFilter';?>" style="line-height:18px;text-indent:6px"> <a href="<?php echo rtrim($params['dr']&&$params['dr']=='25,50'?str_replace('/page/'.$params['page'],'',$dRangeUrl):$dRangeUrl.'/dr/'.rawurlencode('25,50'));?>/">$25 to $50</a> </li> <li class="<?php echo($params['dr']=='50,100')?'prosperActive':'prosperFilter';?>" style="line-height:18px;text-indent:6px"> <a href="<?php echo rtrim($params['dr']&&$params['dr']=='50,100'?str_replace('/page/'.$params['page'],'',$dRangeUrl):$dRangeUrl.'/dr/'.rawurlencode('50,100'));?>/">$50 to $100</a> </li> <li class="<?php echo($params['dr']=='100,250')?'prosperActive':'prosperFilter';?>" style="line-height:18px;text-indent:6px"> <a href="<?php echo rtrim($params['dr']&&$params['dr']=='100,250'?str_replace('/page/'.$params['page'],'',$dRangeUrl):$dRangeUrl.'/dr/'.rawurlencode('100,250'));?>/">$100 to $250</a> </li> <li class="<?php echo($params['dr']=='250,')?'prosperActive':'prosperFilter';?>" style="line-height:18px;text-indent:6px"> <a href="<?php echo rtrim($params['dr']&&$params['dr']=='250,'?str_replace('/page/'.$params['page'],'',$dRangeUrl):$dRangeUrl.'/dr/'.rawurlencode('250,'));?>/">$250 and Above</a> </li> </ul> </li> </ul> <ul class="prosperFilterContainer"> <li class="prosperParent"> <a href="javascript:void(0)" style="cursor:default"> <span class="prosperFilterName">Discount</span> </a> </li> <li id="prospPercent" class="prosperFilterList prospPercent" style="width:100%"> <ul style="font-size:.95em;border:0;width:auto;margin:0"> <li class="<?php echo($params['pr']=='1,')?'prosperActive':'prosperFilter';?>" style="line-height:18px;text-indent:6px"> <a href="<?php echo rtrim($params['pr']&&$params['pr']=='1,'?str_replace('/page/'.$params['page'],'',$pRangeUrl):$pRangeUrl.'/pr/'.rawurlencode('1,'));?>/">All On Sale</a> </li> <li class="<?php echo($params['pr']=='10,25')?'prosperActive':'prosperFilter';?>" style="line-height:18px;text-indent:6px"> <a href="<?php echo rtrim($params['pr']&&$params['pr']=='10,25'?str_replace('/page/'.$params['page'],'',$pRangeUrl):$pRangeUrl.'/pr/'.rawurlencode('10,25'));?>/">10% to 25% Off</a> </li> <li class="<?php echo($params['pr']=='25,50')?'prosperActive':'prosperFilter';?>" style="line-height:18px;text-indent:6px"> <a href="<?php echo rtrim($params['pr']&&$params['pr']=='25,50'?str_replace('/page/'.$params['page'],'',$pRangeUrl):$pRangeUrl.'/pr/'.rawurlencode('25,50'));?>/">25% to 50% Off</a> </li> <li class="<?php echo($params['pr']=='50,75')?'prosperActive':'prosperFilter';?>" style="line-height:18px;text-indent:6px"> <a href="<?php echo rtrim($params['pr']&&$params['pr']=='50,75'?str_replace('/page/'.$params['page'],'',$pRangeUrl):$pRangeUrl.'/pr/'.rawurlencode('50,75'));?>/">50% to 75% Off</a> </li> <li class="<?php echo($params['pr']=='75,')?'prosperActive':'prosperFilter';?>" style="line-height:18px;text-indent:6px"> <a href="<?php echo rtrim($params['pr']&&$params['pr']=='75,'?str_replace('/page/'.$params['page'],'',$pRangeUrl):$pRangeUrl.'/pr/'.rawurlencode('75,'));?>/">75% Off or More</a> </li> </ul> </li> </ul> </div> <?php }if(!$noResults):?> <div style="float:left;margin-left:7px;line-height:16px"> <h2 style="font-size:16px;line-height:16px;margin:0;font-weight:700;padding:0"><?php echo $title;?></h2> </div> <div style="float:right;line-height:16px"> <div id="views"> <a href="<?php echo str_replace(array('/view/'.$view),'',$url).'/view/grid/';?>" rel="nofollow,nolink"> <span class="gridIcon"> <i class="fa fa-th-large fa-lg"></i> </span> </a> <a href="<?php echo str_replace(array('/view/'.$view),'',$url).'/view/list/';?>" rel="nofollow,nolink"> <span class="listIcon"> <i class="fa fa-th-list fa-lg"></i> </span> </a> </div> <div id="prosperPriceSorter"> <span class="sortLabel">Sort By: </span><?php $sortCount=count($sortArray);$c=0;foreach($sortArray as $i=>$sort){?><a <?php echo(preg_match('/'.$sortedParam.'/i',$sort)?'class="activeSort"':'');?> href="<?php echo($sortUrl?$sortUrl:$url).'/sort/'.$sort;?>/"><?php echo $i;?></a><?php if($sortCount>($c + 1)){echo '|';}$c++;}?></div> </div> <div id="simProd" class="prosperResults" style="<?php echo(!$filterArray?'width:100%!important;max-width:100%!important;':'margin-left:7px;');?>"> <?php if(!$view||$view==='list'){?> <div id="productList" style="width:100%;float:right;display:inline-block;border:0"> <?php $resultsCount=count($results);foreach($results as $i=>$record){$cid=$record['catalogId'];?> <div data-prosperKeyword="<?php echo $keyword;?>" id="<?php echo $cid;?>" class="<?php echo $record['productId'];?> productBlock" <?php echo($i==($resultsCount - 1)?'style="border-bottom:none;"':'');?>> <div class="productImage"> <a href=<?php echo $options['gotoMerchantBypass']?'"'.$record['affiliate_url'].'&interface=wp&subinterface=prospershop" target="'.$target.'" rel="nolink,nofollow"':'"'.$homeUrl.'/'.$type.'/'.rawurlencode(str_replace('/',',SL,',$record['keyword'])).'/cid/'.$cid.'" rel="nolink"';?>> <span class="prosperLoad"> <img src="<?php echo $record['image_url'];?>" title="<?php echo $record['keyword'];?>" alt="<?php echo $record['keyword'];?>" /> </span> </a> </div> <div class="productContent"> <div class="productTitle"> <a href=<?php echo $options['gotoMerchantBypass']?'"'.$record['affiliate_url'].'&interface=wp&subinterface=prospershop" target="'.$target.'" rel="nolink,nofollow"':'"'.$homeUrl.'/'.$type.'/'.rawurlencode(str_replace('/',',SL,',$record['keyword'])).'/cid/'.$cid.'" rel="nolink"';?>> <span><?php echo preg_replace('/\(.+\)/i','',$record['keyword']);?></span> </a> </div> <div class="productDescription"> <?php if(strlen($record['description'])>200){echo substr($record['description'],0,200).'...';}else{echo $record['description'];}?> </div> <div class="productBrandMerchant"> <?php if($record['merchant']){echo '<span class="merchantIn">Seller: '.(!(preg_match('/\b'.$record['merchant'].'\b/i',rawurldecode($params['merchant'])))?'<a href="'.str_replace('/page/'.$params['page'],'',$url).'/merchant/'.rawurlencode($record['merchant']).'" rel="nolink"><cite>'.$record['merchant'].'</cite></a>':$record['merchant']).'</span>';}?> </div> </div> <div class="productEnd"> <?php if($record['price_sale']||$record['price']||$record['priceSale']){$priceSale=$record['priceSale']?$record['priceSale']:$record['price_sale'];if(empty($priceSale)||$record['price']<=$priceSale){?> <div class="productPriceNoSale"> <span><?php echo '$'.number_format($record['price'],2);?></span> </div> <?php }else{?> <div class="productPrice"> <span><?php echo '$'.number_format($record['price'],2)?></span> </div> <div class="productPriceSale"> <span><?php echo '$'.number_format($priceSale,2)?></span> </div> <?php }}?> <div class="shopCheck prosperVisit"> <a href="<?php echo $record['affiliate_url'].'&interface=wp&subinterface=prospershop';?>" target="<?php echo $target;?>" rel="nofollow,nolink"> <input type="submit" value="<?php echo $visitButton;?>" /> </a> </div> </div> </div> <?php }?> </div> <?php }elseif($view==='grid'){?> <ul> <?php foreach($results as $record){$priceSale=$record['priceSale']?$record['priceSale']:$record['price_sale'];$price=$priceSale?'$'.number_format($priceSale,2).'':'$'.number_format($record['price'],2);$keyword=preg_replace('/\(.+\)/i','',$record['keyword']);$cid=$record['catalogId'];?> <li style="cursor:pointer" id="<?php echo $cid;?>" class="<?php echo $record['productId'];?>" onClick="return prosperProdDetails(this)" data-prosperKeyword="<?php echo $keyword;?>"> <div class="prodImage"> <a onClick="<?php echo $options['stopDetailsPopup']?'':'return false;';?>" href=<?php echo $options['gotoMerchantBypass']?'"'.$record['affiliate_url'].'&interface=wp&subinterface=prospershop" target="'.$target.'" rel="nolink,nofollow"':'"'.$homeUrl.'/'.$type.'/'.rawurlencode(str_replace('/',',SL,',$record['keyword'])).'/cid/'.$cid.'" rel="nolink"';?>> <span class="prosperLoad"> <img src="<?php echo $record['image_url'];?>" title="<?php echo $record['keyword'];?>" alt="<?php echo $record['keyword'];?>" /> </span> </a> </div> <div class="prodContent"> <div class="prodTitle"> <a onClick="return false" href=<?php echo $options['gotoMerchantBypass']?'"'.$record['affiliate_url'].'&interface=wp&subinterface=prospershop" target="'.$target.'" rel="nolink,nofollow"':'"'.$homeUrl.'/'.$type.'/'.rawurlencode(str_replace('/',',SL,',$record['keyword'])).'/cid/'.$cid.'" rel="nolink"';?> style="text-decoration:none"><?php echo($record['brand']?$record['brand']:'&nbsp;');?></a> <div style="position:absolute;left:-9999em;height:1px;line-height:1px"><?php echo $record['description'];?> </div> </div> <div class="prodPrice"> <span class="prosperPrice"><?php echo $price;?></span> <span class="prosperExtra" style="display:inline-block;font-size:14px;font-weight:normal;text-overflow:ellipsis;white-space:nowrap;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;word-wrap:break-word;overflow:hidden;vertical-align:top"> <span style="font-size:12px;font-weight:normal">&nbsp;from </span><?php echo $record['merchant'];?></span> </div> </div> <div class="shopCheck prosperVisit"> <a href="<?php echo $record['affiliate_url'].'&interface=wp&subinterface=prospershop';?>" target="<?php echo $target;?>" rel="nofollow,nolink"> <input id="submit" class="submit" type="submit" value="<?php echo $visitButton;?>" /> </a> </div> </li> <?php }?> </ul> <?php }?> </div> <?php if($totalAvailable>=$options['Pagination_Limit']){echo '<div style="clear: both"></div>';$this->searchModel->prosperPagination($totalAvailable,$params['page']);}?> <?php endif;?> </div> <div style="clear:both"></div>