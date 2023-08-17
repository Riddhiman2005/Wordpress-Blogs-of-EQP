Field Theory Applications in Condensed Matter Physics-IIB


<!-- wp:paragraph -->
<p>Hi Everyone, this is the fourth post of the <a href="https://everlastingquestforphysics.wordpress.com/2023/08/14/field-theory-applications-in-condensed-matter-physics/">series</a>  and the continuation of the last <a href="https://wordpress.com/post/everlastingquestforphysics.wordpress.com/1202">post</a> </p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:500"><strong><span style="text-decoration: underline">Application in Condensed Matter: The Ising Model- Part B</span></strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>So, in this post, I'll focus on The concept of scaling  and will extend the exploration to the concept of renormalization group methods. This diagrams attached in this post are taken from the <a href="https://www.damtp.cam.ac.uk/user/tong/sft/three.pdf">Notes of David Tong</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>So let's start.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><strong><span style="text-decoration: underline">Renormalization Group</span></strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:400"><strong><span style="text-decoration: underline">UV Cutoff</span></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><br>Despite treating the field as continuous, it originates from a lattice, implying limitations on its variability at scales smaller than a. Consequently, the Fourier modes must diminish for sufficiently high momentum, leading to the condition <strong>φ(k)</strong> for </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1290,"width":664,"height":57,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-1-16.png?w=151" alt="" class="wp-image-1290" style="width:664px;height:57px" width="664" height="57" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>. This upper bound Λ is referred to as the <strong>ultraviolet cutoff</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Let's consider our focus on physics occurring at long distance scales, denoted as <strong>L</strong>. In this context, the Fourier modes <strong>φ(k)</strong> with wave numbers </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1292,"width":664,"height":62,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-2-12.png?w=99" alt="" class="wp-image-1292" style="width:664px;height:62px" width="664" height="62" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p> hold little relevance. This observation leads us to formulate an alternative theory, characterized by a lower cutoff denoted as </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1294,"width":664,"height":68,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-3-11.png?w=111" alt="" class="wp-image-1294" style="width:664px;height:68px" width="664" height="68" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Expressing the Fourier modes as </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1296,"width":664,"height":39,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-5-10.png?w=245" alt="" class="wp-image-1296" style="width:664px;height:39px" width="664" height="39" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>, we can distinguish between <strong>φ_(k</strong>) describing the fluctuations with longer wavelengths, and <strong>φ<sub>+</sub>(k</strong>)  representing the fluctuations with shorter wavelengths that we are less concerned with. Notably, <strong>φ_(k</strong>) remains non-vanishing for k&lt;Λ', while <strong>φ<sub>+</sub>(k</strong>) retains non-vanishing values for <strong>Λ'&lt;k&lt;Λ</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>With this distinction, the free energy can be expressed in Fourier space and subsequently decomposed as follows:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1226,"width":664,"height":39,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-5-7.png?w=528" alt="" class="wp-image-1226" style="width:664px;height:39px" width="664" height="39" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>The presence of the third term introduces an interaction between the short and long wavelength modes. As a result, the partition function takes on the following form:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1300,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/screenshot-1013.png?w=1024" alt="" class="wp-image-1300" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>A direct comparison between the original theory and the scaled theory is not currently feasible. This is due to the fact that the definition of the theory relies on both the free energy and the UV cut-off, and these two theories possess distinct cut-off values. Consequently, the original theory has the capacity to describe phenomena beyond the reach of the new theory – specifically, momentum modes surpassing the <strong>UV cut-off</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>To address this issue, a solution is implemented by scaling the momenta in the new theory as </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1303,"width":664,"height":67,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-11-5.png?w=107" alt="" class="wp-image-1303" style="width:664px;height:67px" width="664" height="67" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p> As a result, <strong>k'</strong> spans values up to Λ, mirroring the range covered by <strong>k</strong> in the original theory. A corresponding scaling transpires in real space as </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1306,"width":664,"height":62,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-31.png?w=103" alt="" class="wp-image-1306" style="width:664px;height:62px" width="664" height="62" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>, signifying an observation of the system on a larger length scale. Furthermore, the fields are subject to scaling: </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1308,"width":664,"height":45,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-1-17.png?w=202" alt="" class="wp-image-1308" style="width:664px;height:45px" width="664" height="45" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>, which normalizes the coefficient of the gradient term. With these adjustments, the complete scaled free energy assumes the following form:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1301,"width":664,"height":70,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-8-9.png?w=518" alt="" class="wp-image-1301" style="width:664px;height:70px" width="664" height="70" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>The coupling constants undergo a process of 'flow' as <strong>ζ</strong> increases. The initial values of these constants are assessed when <strong>ζ=1</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:400"><strong><span style="text-decoration: underline">Fixed Points</span></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><br>When we repeatedly integrate out the degrees of freedom at short distances to create a new theory, two main outcomes are possible. We might either move towards infinitely large values or converge towards what we call a fixed point. Fixed points are special points that don't change under a Renormalization Group (RG) transformation. They describe theories without any specific scale. If the initial theory had a certain correlation length scale ξ, then the renormalized theory would have a length scale </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1317,"width":664,"height":68,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-3-12.png?w=94" alt="" class="wp-image-1317" style="width:664px;height:68px" width="664" height="68" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>. As a result, fixed points must have either ξ=0 or ξ=∞.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In the disordered phase, when the temperature (T) is greater than the critical temperature (T<sub>c</sub>), applying a Renormalization Group (RG) flow leads to a decrease in the correlation length, which is essentially like raising the temperature. This process is illustrated in the diagram below, where you can observe that the spins become more disordered and less aligned with each other.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1316,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/screenshot-1019.png?w=1024" alt="" class="wp-image-1316" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Similarly, in the ordered phase, the RG flow also decreases the correlation length. As we follow the RG process, we reach a point where <strong><mark style="background-color:#f8f50d" class="has-inline-color"><em>ξ</em>=0</mark></strong>, which corresponds to the situation at extremely low temperatures. At this point, the orientations of the spins become even more aligned with each other.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1315,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/screenshot-1017.png?w=1024" alt="" class="wp-image-1315" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Theories with a value of <strong><mark style="background-color:#e1e527" class="has-inline-color"><em>ξ</em>=∞</mark></strong> correspond to a critical point where the theory displays fluctuations on all possible sizes. When we perform a Renormalization Group (RG) flow, the theory stays the same, but the way things look changes. Imagine you have a picture that represents what's happening in the theory. As we use RG, the little wiggles and changes that happen up close start to become smoother. However, as these small wiggles become less noticeable, new wiggles from larger distances start coming in to take their place. It's like adjusting the focus of a camera – things might seem clearer up close, but you'll start to notice new details from far away.,</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1314,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/screenshot-1015.png?w=1024" alt="" class="wp-image-1314" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>There exists an infinite array of pathways through which we can deviate from the fixed point. While traversing along certain trajectories, the Renormalization Group (RG) flow will lead us back towards the fixed point. These alterations are termed as "irrelevant," for the addition of such terms to the free energy yields an equivalent depiction of the long-distance physics. In contrast, particular directions will propel the RG flow away from the fixed point. These modifications are termed "relevant" as they yield distinct long-distance physics. Alternatively, there is the prospect of transitioning to another fixed point, resulting in what we refer to as <strong>"marginal" deformations</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:400"><strong><span style="text-decoration: underline">Beta Functions</span></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><br>Beta functions serve as descriptors of the evolution of the coefficients within the field equation. Upon parameterizing the ultraviolet (UV) cutoff as <strong>λ'=λe<sup>-s</sup></strong>, the beta functions are computed by differentiating with respect to the parameter <em>s.</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In the realm of a free theory, there exists no intermingling between distinct coefficients. Each coefficient acts independently and does not trigger a flow in the others. However, this principle changes in the presence of interactions within the theory. Now using Feynman rules, I tried computing coefficients up to the second order.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1207,"width":664,"height":84,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-24.png?w=446" alt="" class="wp-image-1207" style="width:664px;height:84px" width="664" height="84" /></figure>
<!-- /wp:image -->

<!-- wp:image {"id":1209,"width":664,"height":84,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-2-7.png?w=478" alt="" class="wp-image-1209" style="width:664px;height:84px" width="664" height="84" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>For small s, we' ve </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1310,"width":664,"height":73,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-2-13.png?w=270" alt="" class="wp-image-1310" style="width:664px;height:73px" width="664" height="73" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>. And thus, the beta functions become</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1289,"width":664,"height":72,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-29.png?w=292" alt="" class="wp-image-1289" style="width:664px;height:72px" width="664" height="72" /></figure>
<!-- /wp:image -->

<!-- wp:image {"id":1287,"width":664,"height":72,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://everlastingquestforphysics.files.wordpress.com/2023/08/lagrida_latex_editor-9-6.png?w=262" alt="" class="wp-image-1287" style="width:664px;height:72px" width="664" height="72" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The beta function for <strong>μ<sup>2</sup></strong> encompasses two distinct terms. The first term arises from the scaling procedures within the <strong>Renormalization Group (RG)</strong>, while the second emerges from the process of integrating out high momentum modes. Conversely, the beta function for <strong>g</strong> contains a solitary term. This absence of a linear term is attributed to its marginal nature under scaling. However, upon closer inspection, it becomes evident that a contribution is introduced when we undertake the integration of high momentum modes at the second order.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:400"><strong><span style="text-decoration: underline">References</span></strong></h4>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol><!-- wp:list-item -->
<li>David Tong Notes: <a href="https://www.damtp.cam.ac.uk/user/tong/sft/three.pdf">Statistical Field Theory, University of Cambridge (2017)</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scherer, Michael M., Introduction to Renormalization, University of<br>Cologne (2018)</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->
