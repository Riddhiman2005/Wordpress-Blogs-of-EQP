Field Theory Applications in Condensed Matter Physics-IIA

<!-- wp:image {"id":1285,"width":665,"height":277,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/image-24.png?w=600" alt="" class="wp-image-1285" style="width:665px;height:277px" width="665" height="277" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Hi Everyone, this is the third post of the <a href="https://everlastingquestforphysics.wordpress.com/2023/08/14/field-theory-applications-in-condensed-matter-physics/">series</a> [Please go through the <a href="https://wordpress.com/post/everlastingquestforphysics.wordpress.com/1060">First</a> and the <a href="https://wordpress.com/post/everlastingquestforphysics.wordpress.com/1133">second</a> because we'll need them in understanding this post]and the title of this study is </p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:500"><strong><span style="text-decoration: underline">Application in Condensed Matter: The Ising Model- Part A</span></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This section delves into condensed matter physics, focusing on the Ising model of a ferromagnet. The field theory discussed earlier bears a striking resemblance to the Hamiltonian of the Ising model. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Furthermore, this section delves into the realm of phase transitions, exploring the critical exponents associated with this model and their derivation using field theory techniques. In the <a href="https://everlastingquestforphysics.wordpress.com/2023/08/16/field-theory-applications-in-condensed-matter-physics-iib/">next post</a>, we'll focus on The concept of scaling  and will extend the exploration to the concept of renormalization group methods.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><strong><span style="text-decoration: underline">Phase Transitions</span></strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><br>The Ising model offers a straightforward representation of a magnet, describing a lattice in <strong>d</strong> spatial dimensions with <strong>N </strong>sites. At each site, there exists a state with a magnetic moment, referred to as a spin. These spins, denoted as <strong>s<sub>i</sub></strong>, possess values of either <strong>+1 </strong>or <strong>-1</strong>. The entire assembly of spins is governed by a Hamiltonian</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1204,"width":664,"height":65,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-1-10.png?w=285" alt="" class="wp-image-1204" style="width:664px;height:65px" width="664" height="65" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>The initial term arises due to an external magnetic field's impact on the spins, while the second term signifies the interaction between neighboring spins. When <strong>J&gt;0</strong>, adjacent spins tend to align, resulting in a ferromagnetic system.<br>In the canonical ensemble, the likelihood of occupying a configuration of spins <strong>s<sub>i</sub></strong>  is described by the following expression:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1228,"width":664,"height":67,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-6-4.png?w=317" alt="" class="wp-image-1228" style="width:664px;height:67px" width="664" height="67" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p> and the normalization factor </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1230,"width":664,"height":66,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-7-7.png?w=176" alt="" class="wp-image-1230" style="width:664px;height:66px" width="664" height="66" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p> is the partition function.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Now our concern is the average magnetization denoted as m. Later in the post, this quantity assumes the role of the scalar field. Its range spans from <strong>-1 (ordered spins at low temperatures)</strong> to +<strong>1 (random spins at high temperatures)</strong>. The thermodynamic free energy is given by <strong><mark style="background-color:#f7e409" class="has-inline-color">F=-Tlog Z</mark></strong>. To elaborate, when summing over all configurations with a fixed average magnetization, and then further summing over all possible values of m, we can redefine </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1242,"width":664,"height":64,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-12-4.png?w=181" alt="" class="wp-image-1242" style="width:664px;height:64px" width="664" height="64" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:400"><strong><span style="text-decoration: underline">Mean Field Theory</span></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><br>Given the average magnetization <strong>m</strong> for a lattice with N sites, we can formulate an average energy as follows:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1238,"width":664,"height":62,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-10-5.png?w=379" alt="" class="wp-image-1238" style="width:664px;height:62px" width="664" height="62" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p> is the number of nearest neighbours in a lattice of dimensions d. The magnetization resulting from a configuration containing <strong>N<sub>↑</sub></strong><sub> </sub>up spins and <strong>N<sub>↓</sub>=N-N<sub>↑</sub></strong> down spins can be expressed as:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1240,"width":664,"height":64,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-11-4.png?w=172" alt="" class="wp-image-1240" style="width:664px;height:64px" width="664" height="64" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p> and the number of such configurations is gis determined by </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1245,"width":664,"height":70,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-27.png?w=232" alt="" class="wp-image-1245" style="width:664px;height:70px" width="664" height="70" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>. We'll use Stirling's approximation to derive the average free energy as:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1233,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-9-4.png?w=773" alt="" class="wp-image-1233" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>m is small, and thus we use Taylor expansion to write</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1232,"width":664,"height":62,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-8-6.png?w=426" alt="" class="wp-image-1232" style="width:664px;height:62px" width="664" height="62" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>The critical temperature is defined as <strong>T<sub>c</sub>=Jq</strong>. In the case of <strong>B=0</strong>, temperatures exceeding T<sub>c</sub> lead to a minimum at <strong>m=0</strong>. However, when the temperature decreases below T<sub>c</sub>, the minima shift to </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1252,"width":664,"height":36,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-1-13.png?w=124" alt="" class="wp-image-1252" style="width:664px;height:36px" width="664" height="36" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>At the critical temperature, the magnetization experiences an abrupt fall and remains zero for temperatures higher the critical point. This sudden and distinct alteration is a characteristic of a second-order phase transition.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>When B≠ 0, we once again use the Taylor expansion to expand the free energy and differentiate it. In this scenario, the ground state of the system, representing the global minimum of f(m), remains qualitatively unchanged as we manipulate the temperature. At elevated temperatures, the magnetization smoothly approaches zero. The selection between <strong>m=+1</strong> and <strong>m=-1</strong> depends solely on the magnetic field's sign. There exists no temperature-dependent phase transition.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>For a fixed temperature below T<sub>c</sub>, if B undergoes continuous variation, including a change in sign, the magnetization experiences a discontinuous jump. This marks a first-order phase transition. Conversely, when T&gt;T<sub>c</sub>, any alteration in B is feasible without encountering a phase transition.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:400"><strong><span style="text-decoration: underline">Critical Exponents</span></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><br>The mean field theory (MFT) significantly depends on the dimensionality of the system. In the case of d=1, MFT encounters complete failure. Hence, the lower critical dimension is established as 1, and no phase transitions occur. On the other hand, in d=2 and d=3, phase transitions manifest, yet the quantitative forecasts in the vicinity of the critical temperature prove inaccurate. It is in systems with d&gt;4 that MFT yields accurate outcomes. Thus, the upper critical dimension is 4.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1253,"width":664,"height":72,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-2-10.png?w=580" alt="" class="wp-image-1253" style="width:664px;height:72px" width="664" height="72" /></figure>
<!-- /wp:image -->

<!-- wp:image {"id":1254,"width":664,"height":70,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-3-9.png?w=503" alt="" class="wp-image-1254" style="width:664px;height:70px" width="664" height="70" /></figure>
<!-- /wp:image -->

<!-- wp:image {"id":1255,"width":664,"height":71,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-4-7.png?w=509" alt="" class="wp-image-1255" style="width:664px;height:71px" width="664" height="71" /></figure>
<!-- /wp:image -->

<!-- wp:image {"id":1256,"width":664,"height":70,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-5-8.png?w=439" alt="" class="wp-image-1256" style="width:664px;height:70px" width="664" height="70" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p> The coefficients α, β, γ, and δ are referred to as critical exponents. In case d=3 , the Ising model is analytically unsolvable. Numerical computations yield the following values for these critical exponents: α=0.1101, β=0.2364, γ=1.2371, and δ=4.7898..</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The phase transitions observed in liquid-gas transformations share similarities with the Ising model. In this context, the critical point occurs at T<sub>c</sub>=373° C and p<sub>c</sub>=218 atm. Similarly, critical exponents can be determined using Mean Field Theory (MFT). Evaluating the difference <strong>v<sub>gas</sub>-v<sub>liquid</sub></strong> leads to </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1258,"width":664,"height":62,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-6-5.png?w=91" alt="" class="wp-image-1258" style="width:664px;height:62px" width="664" height="62" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p> for constant pressure and δ=3 for constant temperature. Analogous to magnetic susceptibility, the concept of compressibility <strong>κ </strong> yields γ=1. It's worth noting that these values are inaccurate for d=2 and d=3. Interestingly, this outcome is not coincidental.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In case of second-order phase transitions, the underlying microscopic structure holds less significance. The observation that a wide range of diverse systems can be described by the same critical exponents is known as <strong><span style="text-decoration: underline">universality</span></strong>. <strong><span style="text-decoration: underline">This phenomenon is largely influenced by the symmetries inherent in the system</span></strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:400"><strong><span style="text-decoration: underline">Landau-Ginzburg Theory</span></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>In the previous case, we considered magnetization as constant. In the Landau-Ginzburg theory, magnetization is raised to the status of a field to account for its spatial variations. The lattice is divided into boxes of side length a and N' sites, each possessing magnetization<strong> m(x)</strong>. Treating <strong>m(x)</strong> as continuous, the partition function transforms into an integral across all field configurations: </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1262,"width":664,"height":66,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-8-7.png?w=261" alt="" class="wp-image-1262" style="width:664px;height:66px" width="664" height="66" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>. The free energy becomes functional, resembling the behavior of the previously studied Φ<sup>4</sup> theory [<a href="https://wordpress.com/post/everlastingquestforphysics.wordpress.com/1060">Here</a> and <a href="https://wordpress.com/post/everlastingquestforphysics.wordpress.com/1133">here</a> too], albeit with spacetime derivatives being substituted by normal Euclidean gradient operators. By replacing m with Φ, this equivalence is maintained.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1264,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-9-5.png?w=503" alt="" class="wp-image-1264" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p> α<sub>2</sub>, α<sub>4</sub> and γ are functions of temperature.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Ok, so let's start with the free field expansion, i.e. α<sub>4</sub>=0.  α<sub>2</sub> is then redefined as <strong>μ<sup>2</sup>=T-T<sub>c</sub></strong>. The significance of the quartic term becomes pronounced as the temperature approaches <strong>T<sub>c</sub></strong>, and its impact cannot be disregarded. Consequently, the outcomes and conclusions derived from the theory will not remain valid in the limit where <strong>μ<sup>2</sup></strong> tends toward zero.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The Fourier transform of the field is given by </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1267,"width":664,"height":66,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-28.png?w=263" alt="" class="wp-image-1267" style="width:664px;height:66px" width="664" height="66" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>. Due to the real nature of the field, it follows that </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1270,"width":664,"height":39,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-1-15.png?w=175" alt="" class="wp-image-1270" style="width:664px;height:39px" width="664" height="39" /></figure>
<!-- /wp:image -->

<!-- wp:image {"id":1260,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-7-8.png?w=1024" alt="" class="wp-image-1260" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>The free energy can be decomposed into individual modes and the path integral takes the form:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1266,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-10-6.png?w=484" alt="" class="wp-image-1266" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>The integral is converted to sum in finite volume <strong>V</strong>, and the Gaussian integral is applied for each <strong>k</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1272,"width":664,"height":86,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-2-11.png?w=252" alt="" class="wp-image-1272" style="width:664px;height:86px" width="664" height="86" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color">The correlation function captures the spatial fluctuations around the ground state. Now borrowing the results we discussed in the previous <a href="https://wordpress.com/post/everlastingquestforphysics.wordpress.com/1133">post</a>:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1274,"width":664,"height":74,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-3-10.png?w=378" alt="" class="wp-image-1274" style="width:664px;height:74px" width="664" height="74" /></figure>
<!-- /wp:image -->

<!-- wp:image {"id":1275,"width":664,"height":47,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-4-8.png?w=378" alt="" class="wp-image-1275" style="width:664px;height:47px" width="664" height="47" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>The Green's function maintains rotational invariance, allowing us to set  |<strong>x</strong>-<strong>y</strong>|=r. By introducing the correlation length as </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1276,"width":664,"height":63,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-5-9.png?w=110" alt="" class="wp-image-1276" style="width:664px;height:63px" width="664" height="63" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>, the Green's function can be expressed in terms of r and solved using Bessel functions.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1277,"width":664,"height":64,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-6-6.png?w=309" alt="" class="wp-image-1277" style="width:664px;height:64px" width="664" height="64" /></figure>
<!-- /wp:image -->

<!-- wp:image {"id":1279,"width":664,"height":75,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-7-9.png?w=308" alt="" class="wp-image-1279" style="width:664px;height:75px" width="664" height="75" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>This implies that correlations diminish rapidly with an exponential decay for distances <strong>r&gt;&gt;ξ</strong>, whereas for r&lt;&lt;ξ, a much slower power-law decrease is observed. Consequently, ξ emerges as a defining length scale for these fluctuations. Within a given thermal ensemble, regions can exhibit magnetization slightly above or below the average </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1280,"width":664,"height":39,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-8-8.png?w=65" alt="" class="wp-image-1280" style="width:664px;height:39px" width="664" height="39" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>, and these regions are confined to sizes no greater than ξ. As the critical point is approached, the system experiences fluctuations of arbitrarily large sizes. This phenomenon lies at the core of a second-order phase transition.<br><br><br><br></p>
<!-- /wp:paragraph -->
