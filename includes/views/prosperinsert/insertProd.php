
<?php if($fetch === 'fetchMerchant'){?>
<div style="clear: both"></div>
<div id="simProd">
    <ul> <?php foreach($results as $record){if($record['deepLinking']==1&&$pieces['gtm']){if($record['domain']=='sportsauthority.com'){$record['domain']=$record['domain'].'%2Fhome%2Findex.jsp';}$goToUrl='http://prosperent.com/wp/linkaffiliator/redirect?apiKey='.$this->_options['Api_Key'].'&sid='.$sid.'&location='.rawurlencode($currentUrl).'&url='.rawurlencode('http://'.$record['domain']);}else{$goToUrl='"'.$homeUrl.'/'.$base.'/merchant/'.rawurlencode($record['merchant']).'" rel="nolink"';}?> <li
            style="overflow: hidden; list-style: none; margin: 9px; float: left; height: 76px !important; width: 136px !important">
            <div class="listBlock">
                <div class="prodImage" style="text-align: center; margin: 8px">
                    <a href="<?php echo $goToUrl;?>">
                        <span title="<?php echo $record['merchant'];?>">
                            <img class="newImage" style="height: 60px !important; width: 120px !important" src='<?php echo $record['logoUrl'];?>' alt='<?php echo $record['merchant'];?>' title='<?php echo $record['merchant'];?>' />
                        </span>
                    </a>
                </div>
            </div>
        </li> <?php }?> </ul>
</div>
<?php }elseif($pieces['v']==='grid'){?>
<div style="clear: both"></div>
<div id="simProd" class="prosperInsert">
    <ul style="width: 100% !important"> <?php foreach($results as $record){$priceSale=$record['priceSale']?$record['priceSale']:$record['price_sale'];$price=$priceSale?'$'.number_format($priceSale,2).'':'$'.number_format($record['price'],2);$keyword=preg_replace('/\(.+\)/i','',$record['keyword']);$cid=$record[$recordId];if($this->_options['PSAct']&&(!$pieces['gtm']||$pieces['gtm']==='false'||$pieces['gtm']==='prodPage')){$goToUrl='"'.$homeUrl.'/product/'.rawurlencode(str_replace('/',',SL,',$record['keyword'])).'/cid/'.$cid.'" rel="nolink"';}else{$goToUrl='"'.$record['affiliate_url'].'&interface=wp&subinterface=prosperinsert" rel="nofollow,nolink" class="shopCheck" target="'.$target.'"';}?> <li
            id="<?php echo $cid;?>" class="<?php echo $record['productId'];?>" data-prosperKeyword="<?php echo $keyword;?>">
            <div class="prodImage">
                <a href=<?php echo $goToUrl;?>>
                    <span class="prosperLoad">
                        <img src="<?php echo $record['image_url'];?>" title="<?php echo $record['keyword'];?>" alt="<?php echo $record['keyword'];?>" />
                    </span>
                </a>
            </div>
            <div class="prodContent">
                <div class="prodTitle">
                    <a href=<?php echo $goToUrl;?> style="text-decoration: none; "><?php echo($record['brand']?$record['brand']:'&nbsp;');?></a>
                    <div style="position: absolute; left: -9999em; height: 1px; line-height: 1px"><?php echo $record['description'];?> </div>
                </div>
                <div class="prodPrice">
                    <span class="prosperPrice"><?php echo $price;?></span>
                    <span class="prosperExtra" style="display: inline-block; font-size: 14px; font-weight: normal; text-overflow: ellipsis; white-space: nowrap; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; word-wrap: break-word; overflow: hidden; vertical-align: top">
                        <span style="font-size: 12px; font-weight: normal">&nbsp;from </span><?php echo $record['merchant'];?></span>
                </div>
            </div>
            <div class="shopCheck prosperVisit">
                <a href="<?php echo $record['affiliate_url'].'&interface=wp&subinterface=prosperinsert';?>" target="<?php echo $target;?>" rel="nofollow,nolink">
                    <input id="submit" class="submit" type="submit" value="<?php echo $pieces['vst'];?>" />
                </a>
            </div>
        </li> <?php }?> </ul>
</div>
<?php }elseif($pieces['v']==='pc'){?>
<div id="product" itemscope itemtype="http://schema.org/Product">
    <span style="display: none" itemprop="description"><?php $results[0]['description']?></span>
    <span itemprop="brand" style="display: none"><?php echo $results[0]['brand'];?></span>
    <span itemprop="name" style="display: none"><?php echo $results[0]['keyword'];?></span>
    <div>
        <table class="productResults" style="<?php echo($pieces['imgt']=='white'?'color:white;':'background:white;');?>width:80%"> <?php foreach($results as $product){$priceSale=$record['priceSale']?$record['priceSale']:$record['price_sale'];$price=$priceSale?$priceSale:$record['price'];$listPrice=($priceSale?number_format($priceSale,2,'.',','):number_format($product['price'],2,'.',','));$goToUrl='"'.$record['affiliate_url'].'&interface=wp&subinterface=prosperinsert" rel="nofollow,nolink" class="shopCheck" target="_blank"';if(!$keywordSet){echo '<tr><td id="prosperPCKeyword" colspan="4" style="width:100%;text-align:center;font-size:1.5em">'.$product['keyword'].'</td></tr>';$keywordSet=true;}if(!$imageSet){echo '<tr>';echo '<td id="prosperPCImage" style="vertical-align:middle;width:50%;"><img style="text-align:center;" src="'.$product['image_url'].'"/></td>';$imageSet=true;echo '<td id="prosperPCMerchants" style="vertical-align:middle;width:50%;"><table id="prosperPCAllMercs" style="border:none;width:100%;margin:0;'.($pieces['imgt']=='white'?'color:white;':'background:white;').'">';}echo '<tr itemprop="offers" itemscope itemtype="http://schema.org/Offer" >';echo '<td itemprop="seller" itemscope itemtype="http://schema.org/Organization" class="prosperPCmercimg" style="vertical-align:middle;"><a href="'.$product['affiliate_url'].'&interface=wp&subinterface=prosperinsert" rel="nolink"><img style="width:100px" src="http://images.prosperentcdn.com/images/logo/merchant/'.($pieces['imgt']?$pieces['imgt']:'original').'/120x60/'.$product['merchantId'].'.jpg?prosp=&m='.$product['merchant'].'"/><div style="display:none;"><span itemprop="name">'.$product['merchant'].'</span></div></a></td>';echo '<td style="vertical-align:middle;"><span itemprop="priceCurrency" content="USD">$</span><span itemprop="price" content="'.$listPrice.'">'.$listPrice.'</span></td>';echo '<td style="vertical-align:middle;"><div class="prosperVisit"><a itemprop="url" href="'.$product['affiliate_url'].'&interface=wp&subinterface=prosperinsert"  rel="nofollow,nolink" target="'.$target.'"><input type="submit" type="submit" class="prosperVisitSubmit" value="'.($pieces['vst']?$pieces['vst']:'Visit Store').'"/></a></div></td>';echo '</tr>';}?> </table>
        </td>
        </tr>
        </table>
    </div>
</div>
<?php }else{?>
<div id="productList" style="border: 0; border-top: 1px solid #ddd"> <?php $pageId=get_option('prosperent_store_pageId');$page=get_post($pageId);$baseUrl=$homeUrl.'/'.$page->post_name;foreach($results as $record){$cid=$record['catalogId'];if(($this->_options['PSAct']&&$page->post_status=='publish')&&(!$pieces['gtm']||$pieces['gtm']==='false')){$goToUrl='"'.$homeUrl.'/'.$type.'/'.rawurlencode(str_replace('/',',SL,',$record['keyword'])).'/cid/'.$cid.'" rel="nolink"';}else{$goToUrl='"'.$record['affiliate_url'].'&interface=wp&subinterface=prosperinsert" rel="nofollow,nolink" class="shopCheck" target="'.$target.'"';}?> <div
        class="productBlock">
        <div class="productImage">
            <a href=<?php echo $goToUrl;?>>
                <span class="load">
                    <img src="<?php echo $record['image_url'];?>" title="<?php echo $record['keyword'];?>" alt="<?php echo $record['keyword'];?>" />
                </span>
            </a>
        </div>
        <div class="productContent">
            <div class="productTitle">
                <a href=<?php echo $goToUrl;?>>
                    <span><?php echo $record['keyword'];?></span>
                </a>
            </div>
            <div class="productDescription"> <?php if(strlen($record['description'])>200){echo substr($record['description'],0,200).'...';}else{echo $record['description'];}?> </div>
            <div class="productBrandMerchant"> <?php if($record['brand']){echo '<span class="brandIn"><u>Brand</u>: <a href='.($this->_options['PSAct']?'"'.$baseUrl.'/brand/'.rawurlencode($record['brand']).'" rel="nolink"':$goToUrl).'><cite>'.$record['brand'].'</cite></a></span>';}if($record['merchant']){echo '<span class="merchantIn"><u>Merchant</u>: <a href='.($this->_options['PSAct']?'"'.$baseUrl.'/merchant/'.rawurlencode($record['merchant']).'" rel="nolink"':$goToUrl).'><cite>'.$record['merchant'].'</cite></a></span>';}?> </div>
        </div>
        <div class="productEnd"> <?php if($record['price_sale']||$record['price']||$record['priceSale']){$priceSale=$record['priceSale']?$record['priceSale']:$record['price_sale'];if(empty($priceSale)||$record['price']<=$priceSale){?> <div class="productPriceNoSale">
                <span><?php echo '$'.$record['price'];?></span>
            </div> <?php }else{?> <div class="productPrice">
                <span><?php echo '$'.$record['price']?></span>
            </div>
            <div class="productPriceSale">
                <span><?php echo '$'.$priceSale?></span>
            </div> <?php }}?> <div class="shopCheck prosperVisit">
                <a href="<?php echo $record['affiliate_url'].'&interface=wp&subinterface=prosperinsert';?>" target="<?php echo $target;?>" rel="nofollow,nolink">
                    <input type="submit" value="<?php echo $pieces['vst'];?>" />
                </a>
            </div>
        </div>
    </div> <?php }?> </div>
<?php }

