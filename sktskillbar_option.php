<style>
table{border-collapse:collapse;}
table td{padding:5px;}
table td img{max-width:100%;}
code{font-family:"Courier New", Courier, monospace; background:none;}
</style>

<div class="wrap">
    <?php 
    $dir = plugin_dir_path( __FILE__ ); 
    $lpos = strrpos($dir, "skt-"); 
    $dirPathStr = substr($dir, $lpos, strlen($dir) );
    $dirPath = str_replace('/', '', $dirPathStr);
    ?>
    <div class="sktimagetop_admin_image">
        <a href="<?php echo esc_url('https://www.sktthemes.org/themes/'); ?>" title="<?php esc_html('SKT Wordpress Themes');?>" target="_blank"><img src="<?php echo esc_url(plugins_url( $dirPath.'/images/browse-themes.png' )); ?>" alt="<?php esc_html('SKT Wordpress Themes');?>" /></a>
    </div>
    <?php echo "<h2>" . esc_html( 'SKT Skill Bar Options') . "</h2>"; ?>
    <table width="100%" class="fixed">
        <tr>
            <td width="75%">
	            <img src="<?php echo esc_url(plugins_url( $dirPath.'/images/sample_bar.jpg' )); ?>" alt="<?php echo esc_html('Skill Bar');?>" /><br />
                <code>
                    [skillwrapper type="bar" bar_titlefontsize="12" bar_titlecolor="#000" bar_percentfontszie="11" bar_percentcolor="#336699"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill title_background="#f7a53b" bar_foreground="#ff9000" bar_background="#eeeeee" percent="90" title="CSS3"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill title_background="#39bcdf" bar_foreground="#6adcfa" bar_background="#eeeeee" percent="55" title="WordPress"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill title_background="#ff2727" bar_foreground="#fa6e6e" bar_background="#eeeeee" percent="85" title="PHP"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill title_background="#0d5aa6" bar_foreground="#336699" bar_background="#eeeeee" percent="100" title="jQuery"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>
        <tr>
            <td><hr style="border-color:#eee;" /></td>
        </tr>
        <tr>
            <td>
	            <img src="<?php echo esc_url(plugins_url( $dirPath.'/images/sample_gage.jpg' )); ?>" alt="<?php echo esc_html('Skill Gage');?>" /><br />
                <code>
                    [skillwrapper type="gage" align="left"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="75" title="WordPress" bar_foreground="#f00" bar_background="#eee"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="25" title="SEO" bar_foreground="#f60" bar_background="#eee"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="50" title="PHP" bar_foreground="#900" bar_background="#eee"]<br />
                    [/skillwrapper]
				</code>
            </td>
        </tr>
        <tr>
            <td><hr style="border-color:#eee;" /></td>
        </tr>
        <tr>
            <td>
            	<img src="<?php echo esc_url(plugins_url( $dirPath.'/images/sample_circle.jpg' )); ?>" alt="<?php echo esc_html('Skill Circle');?>" /><br />
                <code>
                    [skillwrapper type="circle" track_color="#333333" chart_color="#dddddd" chart_size="550" chart_fontsize="13" chart_headingfontsize="16" align="left"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="88" title="Web Research"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="55" title="WordPress"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="85" title="PHP"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="100" title="jQuery"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>


        <tr>
            <td><hr style="border-color:#eee;" /></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo esc_url(plugins_url( $dirPath.'/images/ver-graph.jpg' )); ?>" alt="<?php echo esc_html('Skill Vertical Graph');?>" /><br />
                
                <code>
                    [skillwrapper type="skt_verticalgraph"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" verticalgraph_background="#6adcfa"  verticalgraph_titlecolor="#000000"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript"  verticalgraph_background="#fa6e6e" verticalgraph_titlecolor="#000000"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP"  verticalgraph_background="#336699" verticalgraph_titlecolor="#000000"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>

        <tr>
            <td><hr style="border-color:#eee;" /></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo esc_url(plugins_url( $dirPath.'/images/pie-graph.jpg' )); ?>" alt="<?php echo esc_html('Skill Pie Graph');?>" /><br />
                <code>
                    [skillwrapper type="skt_piegraph"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" piegraph_background="#6adcfa"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript"  piegraph_background="#fa6e6e"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP"  piegraph_background="#336699"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>

        <tr>
            <td><hr style="border-color:#eee;" /></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo esc_url(plugins_url( $dirPath.'/images/polar-graph.jpg' )); ?>" alt="<?php echo esc_html('Skill Polar Graph');?>" /><br />
                <code>
                    [skillwrapper type="skt_polygraph"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" polygraph_background="#6adcfa"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript"  polygraph_background="#fa6e6e"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP"  polygraph_background="#336699"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>

        <tr>
            <td><hr style="border-color:#eee;"/></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo esc_url(plugins_url( $dirPath.'/images/line-graph.jpg' )); ?>" alt="<?php echo esc_html('Skill Line Graph');?>" /><br />
                <code>
                    [skillwrapper type="skt_linegraph"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" linegraph_background="#6adcfa"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript"  linegraph_background="#fa6e6e"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP"  linegraph_background="#336699"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>
    </table>
</div>