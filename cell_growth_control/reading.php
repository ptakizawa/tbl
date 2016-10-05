<html lang="en">
<?php include '../includes/head.inc.php'; ?>
<body>
	<?php include '../includes/header.inc.php'; ?>
	<div class="container">
		<div class="row">
	        <div class="col-xs-12">
	          <div class="blog-post">
		          <h1>Cell Growth Control</h1>
	          <h3>Introduction</h3>

<p>We all start as one cell and end up with several trillion. Because all cells arise from cells, cells must reproduce themselves accurately. Cell division produces two viable cells from a single cell. To maintain viability, each daughter cell must have a complete set of chromosomes and enough cellular machinery (organelles, proteins and other macromolecules) to sustain the essential biochemical pathways.</p>

<figure>
<img class="img-responsive" src="images/cell_cycle_introduction.jpg" alt="Cell Cycle Introduction">
<figcaption>Cell Cycle Introduction</figcaption>
</figure>

<h3>Cell Cycle Phases</h3>

<p>The cell cycle is divided into 5 phases. G1 is a growth phase during which cells increase in size and commit to cell division. S phase is when DNA replication occurs. G2 is another growth phase in which the centrosomes move to opposite sides of the cell. The centrosomes will set up the spindle that mediates separation of the chromosomes. Mitosis (M) exhibits the most visible changes in cell structure. The mitotic spindle forms with microtubules emanating from the centrosomes and the chromosomes aligned in the center of the spindle. In the later stages of mitosis, the chromosomes migrate to opposite sides of the cell. Finally, during cytokinesis (C) the cell constricts in middle, pinching together the cell membrane and leading to complete division into two cells. An additional stage is G0 which represents a quiescent state in which cells do not enter the cell cycle.</p>

<figure>
<img class="img-responsive" src="images/cell_cycle_phases.jpg" alt="Cell Cycle Phases">
<figcaption>Cell Cycle Phases</figcaption>
</figure>

<h3>Cell Cycle Controllers: Cyclin and Cyclin-dependent Kinases</h3>

<p>The cell cycle must proceed in an ordered fashion. DNA replication must precede chromosome separation, and chromosome separation must precede cytokinesis. A centralized controller ensures ordered progression through the cell cycle. The controller initiates cell cycle events at the proper time and makes sure that prior events are completed before the next stage is initiated. The cell cycle controller is a complex of two proteins: cyclin-dependent kinase (CDK) and cyclin. CDKs phosphorylate proteins to trigger specific cell cycle events. Cyclins regulate activity of CDKs and help target them to their substrates.</p>

<figure>
<img class="img-responsive" src="images/cyclin_cdk_complex.jpg" alt="Cell Cycle Cyclin CDK Complex">
<figcaption>Cell Cycle Cyclin CDK Complex</figcaption>
</figure>

<h3>Cyclin Expression and Cell-cycle Phases</h3>

<p>Different types of cyclin are expressed during different phases of cell cycle. When each cyclin is expressed, it associates with a cyclin-dependent kinase to trigger specific cell-cycle events. G1/S cyclins (cyclin E) trigger Start or entry into cell cycle. S phase cyclins (cyclin A) trigger DNA replication. M phase cyclins (cyclin B) initiate spindle assembly and attachment of microtubules to chromosomes. Lastly, the anaphase-promoting complex (APC) destroys all cyclins and initiates separation of sister chromatids. Cyclins activate CDKs by similar mechanism but lead CDKs to different targets. Cyclins are expressed in a wave-like progression, and cyclin-CDK complexes trigger expression of next set of cyclins. In contrast, the amount of CDK in the cell remains at a consistent level throughout the cell cycle but CDK must associate with cyclin to be active.</p>

<figure>
<img class="img-responsive" src="images/cyclin_expression.jpg" alt="Cell Cycle Cyclin Expression">
<figcaption>Cell Cycle Cyclin Expression</figcaption>
</figure>

<h3>Activation of Cyclin-CDK</h3>

<p>The activity of CDKs occurs in three steps that involve binding to cyclin and post-translational phosphorylation.</p>

<p>The first step is CDK binding to cyclin. Cyclins bind to a conserved 100 amino acid domain in CDKs called the cyclin box and activate CDKs by partially opening kinase pocket.</p>

<p>The second step is mediated by CDK-activating kinases (CAK). CAKs phosphorylate CDK leading to a complete opening of the substrate-binding site. CAKs seem to be constitutively active in most cells.</p>

<p>The third step is removal of an inhibitory phosphate from CDK. Wee1 is a kinase that adds a phosphate in ATP-binding pocket of CDKs which reduces kinase activity. CDK bound to cyclin and phosphorylated by Wee1 is inactive. Cdc25 removes the inhibitory phosphate from CDK to activate CDK-cyclin. This is the step at which checkpoints will often control progression into the next stage of the cell cycle.</p>

<p>The activation of cyclin-CDK is also regulated by positive feedback. Active cyclin-CDK phosphorylates Cdc25 producing more active Cdc25 and more active cyclin-CDK. Active cyclin-CDK also inhibits Wee1 preventing addition of the inhibitory phosphate.</p>

<figure>
<img class="img-responsive" src="images/activation_cyclin_cdk.jpg" alt="Activation of Cyclin-CDK">
<figcaption>Activation of Cyclin-CDK</figcaption>
</figure>

<h3>Switch-like Activation of Cyclin-CDK</h3>

<p>Why the positive feedback loop? It commits the cell to each stage of the cell cycle. To demonstrate the importance of positive feedback in activating cyclin-CDK, we can compare what would happen if cyclin-CDK were activated without positive feedback. Recall that the amount of CDK in the cell is consistent throughout the cell cycle, but the amount of a specific cyclin increases before most stages of the cell cycle. When a signal triggers expression of a specific cyclin, the levels of cyclin protein slowly increase, which, in the absence of positive feedback, lead to a linear increase in the amount of active cyclin-CDK. There are two drawbacks to a slow, linear increase in cyclin-CDK activity. First, events in one stage of the cell cycle would likely start at different times as some events might require a more active cyclin-CDK than other events. Second, the activity of cyclin-CDK is reversible because if the signal that triggered cyclin expression is removed, the amount of cyclin would decrease leading to less active cyclin-CDK.</p>

<figure>
<img class="img-responsive" src="images/activation_cyclin_cdk_positive_feedback.jpg" alt="Activation of Cyclin-CDK">
<figcaption>Activation of Cyclin-CDK</figcaption>
</figure>

<p>Positive feedback avoids these limitations by producing a switch-like activation of cyclin-CDK. Expression of cyclin starts before the next stage of the cell cycle. Cyclin binds CDK but is inactive due to the inhibitory phosphate added by Wee1. This allows the cell to build up a large concentration of inactive cyclin-CDK before the next stage of the cell cycle. When the cell is ready to initiate the next stage of the cell cycle, it activates Ccd25 which removes the inhibitory phosphate on CDK leading to some active cyclin-CDK. This active cyclin-CDK can activate more CDC25 and inhibits Wee1 producing even more active cyclin-CDK. The net effect is a sharp increase in the amount of active cyclin-CDK. In addition, the activity of cyclin-CDK does not require the initial signal because cyclin-CDK is able to maintain its own activity through positive feedback.</p>

<h3>Turning Off Cyclin-CDK</h3>

<p>The use of positive feedback in the activation of cyclin-CDK means that active cyclin-CDK can't be turned off by simply removal the signal that triggered expression of the cyclin. To inactivate cyclin-CDK, cells target cyclins for destruction by ubiquitylation and then digestion via the proteosome.</p>

<figure>
<img class="img-responsive" src="images/degradation_cyclin.jpg" alt="Degradation of Cyclin">
<figcaption>Degradation of Cyclin</figcaption>
</figure>

<h3>Deciding When to Divide</h3>

<p>The decision to enter the cell cycle is made at point in G1 called Start. After Start, cell is committed to cell division because the cell commences chromosome replication upon entering Start and must finish the cell cycle or undergo apoptosis.</p>

<p>Because Start is the commitment step for the cell cycle, it is a point of intense regulation. Several factors determine whether cell progresses past Start. Many single-celled organisms sense the availability of extracellular nutrients. Our cells are usually surrounded by plenty of nutrients, and instead, they respond to signaling molecules to determine whether or not to divide. These signaling molecules are divided into two types. Mitogens are proteins or peptides that induces cells to start the cell cycle, whereas anti-mitogens inhibit entry into the cell cycle.</p>

<figure>
<img class="img-responsive" src="images/entry_cell_cycle.jpg" alt="Entry into the Cell Cycle">
<figcaption>Entry into the Cell Cycle</figcaption>
</figure>

<p>Start is triggered by the activation of G1/S cyclin-CDK which in mammalian cells is Cyclin E-Cdk2. Cyclin E-Cdk2 activates S-phase complex, cyclin A-Cdk2, that initiates DNA replication. Because the activation of cyclin E-CDK commits the cell to divide, cells tightly control the activation of cyclin E-Cdk2. Cyclin E expression is controlled by another cyclin-CDK complex: cyclin D-Cdk4. Cyclin D levels increase throughout G1 and when the concentration of active cyclin D-Cdk4 reaches a certain level, the activation of cyclin E-Cdk2 is triggered and cells enter Start.</p>

<h3>How Mitogens Trigger Cell Division</h3>

<p>Mitogens bind receptors that trigger a signal transduction pathway that leads to the activation of cyclin D-Cdk4. Cyclin D-Cdk4 then triggers the activation of Cyclin E-Cdk2 which triggers entry into start and activation of Cyclin A-Cdk2. Cyclin A-Cdk2 initiate DNA replication.</p>

<figure>
<img class="img-responsive" src="images/mitogens_cell_division.jpg" alt="Mitogens Trigger Cell Division">
<figcaption>Mitogens Trigger Cell Division</figcaption>
</figure>

<h3>How Mitogens Increase Expression of Cyclin D</h3>

<p>Some mitogens, such as epidermal growth factor (EGF), increase the amount of cyclin D by activating transcription of cyclin D. Mitogens bind receptors (often a receptor tyrosine kinase) that activates a guanine nucleotide exchange factor for the small GTP-binding protein Ras. Ras-GTP then activates a MAP kinase pathway that ultimately leads to the activation of a set of transcription factors including Myc. Myc increases the transcription of cyclin D. Because the receptor, Ras and Myc all regulate the expression of cyclin D, mutation in these proteins that makes them continuously active can lead to uncontrolled cell division. For this reason the receptor, Ras and Myc are know as oncogenes.</p>

<figure>
<img class="img-responsive" src="images/mitogens_cyclin_d_transcription.jpg" alt="Mitogens Increase Transcription of Cyclin D">
<figcaption>Epidermal Growth Factor Increases Transcription of Cyclin D</figcaption>
</figure>

<h3>How Anti-mitogens Inhibit Entry into the Cell Cycle</h3>

<p>Some anti-mitogens, such as TGF-&beta;, inhibit the cell cycle by preventing cyclin D from binding Cdk4. Anti-mitogens binding a receptor (often a receptor serine/threonine kinase) that phosphorylates a protein called Smad (receptor-Smad). Upon phosphorylation, Receptor-Smad dissociates from the receptor and binds its partner Smad4. The complex then enters the nucleus and increases the expression of a protein called Ink4. Ink4 binds Cdk4 and physically prevents it from binding Cyclin D. Because cyclin D can't bind Cdk4, cyclin E is not expressed and the cell does not enter Start.</p>

<figure>
<img class="img-responsive" src="images/antimitogens_ink4_transcription.jpg" alt="Anti-mitogens Increase Transcription of Ink4">
<figcaption>TGF-&beta; Increases Transcription of Ink4</figcaption>
</figure>

<h3>How Cyclin D-Cdk4 Activates Cyclin E-Cdk2</h3>

<p>Cyclin D-Cdk4 increases the transcription cyclin E. Transcription of cyclin E is regulated by a set of transcription factors: E2F 1 - 5. E2F1, E2F2, E2F3 are activators of cyclin E transcription, and E2F4 and E2F5 are inhibitors of cyclin E transcription.</p>

<figure>
<img class="img-responsive" src="images/e2f_cyclin_e_transcription.jpg" alt="E2Fs Regulate Cyclin E Transcription">
<figcaption>E2Fs Regulate Cyclin E Transcription</figcaption>
</figure>

<p>The interaction between the E2F proteins and the regulatory regions of cyclin E is controlled by another protein called retinoblastoma protein or pRb. When E2F1-3 are bound by pRb, then cannot associate with the enhancer of cyclin E, whereas when E2F4-5 is bound by pRb, it readily binds the repressor region of cyclin E. Thus, in the presence of active pRb, cyclin E transcription is inhibited and cells do not divide. Because pRb inhibits cell division, it is called a tumor suppressor.</p>

<figure>
<img class="img-responsive" src="images/pRb_e2f_activity.jpg" alt="pRb Regulates Activity of E2Fs">
<figcaption>pRb Regulates Activity of E2Fs</figcaption>
</figure>

<p>Cyclin D-Cdk4 triggers transcription of cyclin E by phosphorylating pRb. When phosphorylated, pRb cannot associate with the E2F proteins. Freed from pRb, E2F1-3 can bind the enhancer of cyclin E to increase its transcription. In contrast, when E2F4-5 are not bound to pRb, they cannot bind the repressor of cyclin E.</p>

<h3>Positive Feedback Loop to Activate Cyclin D-Cdk2</h3>

<p>The activation of Cyclin D-Cdk2 is also controlled by a positive feedback loop. As mentioned above, pRb is phosphorylated by cyclin D-Cdk4 that leads to transcription of cyclin E and formation of cyclin E-Cdk2. Cyclin E-Cdk2 also phosphorylates pRb leading to more transcription of cyclin E. Once activated, cyclin E-Cdk2 can maintain its own activity through phosphorylation of pRb and sustained expression of cyclin E. At this point the activity of cyclin E-Cdk2 becomes independent of the mitogen. Thus, for most cells, after a mitogen triggers entry into Start, the cell no longer needs the mitogen to proceed through the cell cycle.</p>

<figure>
<img class="img-responsive" src="images/cyclin_e_cdk_positive_feedback.jpg" alt="cyclin_e_cdk_positive_feedback">
<figcaption>Cyclin E-Cdk2 Activated Through Positive Feedback</figcaption>
</figure>

<h3>Cell-cycle Checkpoints</h3>

<p>The cell monitors its progress through the cell cycle to ensure each event is complete before proceeding to next step and checks that conditions are okay for it to proceed to the next step. Checkpoints sense unreplicated DNA, DNA damage and unattached chromosomes during mitosis. When activated, checkpoints arrest the cell cycle before the next stage. Activation of checkpoint inhibits the activity of cyclin-CDK complexes and prevents them from initiating next phase of cell cycle.</p>

<figure>
<img class="img-responsive" src="images/cell_cycle_checkpoints.jpg" alt="Cell Cycle Checkpoints">
<figcaption>Cell Cycle Checkpoints</figcaption>
</figure>

<h3>DNA Damage Checkpoint</h3>

<p>As mentioned, the cell monitors the state of its DNA and arrests the cell cycle if it detects damaged or unreplicated DNA. DNA damage arrests the cell cycle through two mechanisms.</p>

<h4>DNA Damage and P53</h4>

<p>DNA damage leads to the activation of a transcription factor called p53. Cells continually express p53 but most p53 is associated with another protein called Mdm2. Mdm2 prevents p53 from entering the nucleus to activate gene expression and it leads to the ubiquitylation of p53 and digestion of p53 by the proteosome.</p>

<figure>
<img class="img-responsive" src="images/dna_damage_p53.jpg" alt="DNA Damage Triggers Activation of p53">
<figcaption>DNA Damage Triggers Activation of p53</figcaption>
</figure>

<p>DNA damage is recognized by a set of kinases (ATM/ATR and Chk1/Chk2). These kinases phosphorylate Mdm2 which causes it to dissociate from p53. Released from Mdm2, p53 can enter the nucleus where it activates the transcription of genes which encode proteins that arrest the cell cycle. One of these proteins is p21 which binds Cyclin-CDK complexes, such as cyclin E-Cdk2, and prevents their activity, arresting the cell cycle. Because p53 and p21 act to inhibit the cell cycle, they are known as tumor suppressors.</p>

<p>DNA damage also arrests the the cell cycle by reducing the amount of Cdc25. Recall the Cdc25 is a phosphatase that removes the inhibitory phosphate from Cdk2 and leads to its full activation. DNA damage kinases phosphorylate Cdc25 that exposes a degradation motif. Cdc25 is ubiquitylated and digested by the proteosome.</p>

<figure>
<img class="img-responsive" src="images/dna_damage_cdc25.jpg" alt="DNA Damage Triggers Degradation of Cdc25">
<figcaption>DNA Damage Triggers Degradation of Cdc25</figcaption>
</figure>

<h3>p53 and the Inhibition of Oncogenesis</h3>

<p>As mentioned above, many components in the signal transduction pathway can trigger uncontrolled cell division when mutated. These components include Ras, Myc and the E2F proteins that increase transcription of cyclin D. The genes that encodes these proteins are known as oncogenes. Mutations in these genes that produce proteins that are constitutively active or overexpressed can lead to constant expression of cyclin D, even in the absence of a mitogen, and continuous entry into Start.</p>

<figure>
<img class="img-responsive" src="images/p53_oncogenes.jpg" alt="P53 Counteracts Oncogenes">
<figcaption>P53 Counteracts Oncogenes</figcaption>
</figure>

<p>Fortunately, mutations in Ras and Myc also lead to the activation of p53. Besides increasing the transcription of cyclin D, the oncogenes also increase the transcription of p14-ARF. p14-ARF binds Mdm2 and prevents it from interacting with p53. Consequently, p53 is able to enter the nucleus and activate try transcription of the tumor suppressor p21. p21 binds cyclin-CDK complexes and inhibits their activity.</p>

<p>The finding that p53 can prevent cell division even when a cell has an oncogenic mutation in Ras or Myc has led to the two-hit model of tumorigenesis. In this model, a cell becomes cancerous only after it receives two mutations: one in an oncogene (e.g. Ras, Myc) and the other in a tumor suppressor (e.g. p53, p21, Ink4).</p>

<h3>Chromosome Segregation and the Completion of Mitosis</h3>

<p>The other major cell cycle checkpoint occurs during mitosis when the cell is segregating the chromosomes into each future daughter cell. Producing two viable daughter cells requires that each cell receives a complete set of the chromosomes. Improper segregation of the chromosomes can lead to tumorigenesis or developmental diseases, such as Down's syndrome.</p>

<h3>Mitotic Spindle</h3>

<p>To segregate accurately the chromosomes, cells build a spindle of microtubules during metaphase. The spindle contains three types of microtubules. Astral microtubules extend from the centrosomes toward the cell membrane. Interpolar microtubules extend toward the center of the cell and overlap with interloper microtubules coming from the opposite centrosome. Astral and interloper microtubules, along with the motor proteins that bind to them, position the spindle in the center of the cell and will elongate the spindle during anaphase to help separate the chromosomes. Kinetochore microtubules extend attach to chromosomes at the centromere region. Kinetochore microtubules will generate the force to separate the chromosomes during anaphase and cells check that all chromosomes are attached to kinetochore microtubules before allowing mitosis to finish.</p>

<figure>
<img class="img-responsive" src="images/mitotic_spindle.jpg" alt="Mitotic Spindle">
<figcaption>Mitotic Spindle</figcaption>
</figure>

<h3>Chromosome Segregation</h3>

<p>Cells prevent premature separation of replicated chromosomes by wrapping them in a protein complex that contains proteins called cohesins. Cohesins prevent chromosome separation even if the chromosome is attached to microtubules. This allows the cell to delay chromosome separation until all of the chromosomes are attached to microtubules.</p>

<figure>
<img class="img-responsive" src="images/cohesins.jpg" alt="Cohesins Prevent Chromosome Separation">
<figcaption>Cohesins Prevent Chromosome Separation</figcaption>
</figure>

<p>Cells initiate chromosome segregation by activating a set of proteins called the anaphase promoting complex (APC). APC is the equivalent of E2 and E3 ligases and targets specific proteins for degradation, including cyclin B and securin, through ubiquitylation. The loss of cyclin B reduces Cdk2 activity and the destruction of securing triggers separation of the chromosomes. Securin forms a complex with a protease called separase and keeps separase in an inactive state.</p>

<figure>
<img class="img-responsive" src="images/apc_separase_activation.jpg" alt="APC Activates Separase">
<figcaption>APC Activates Separase</figcaption>
</figure>

<p>When released from securin, separase becomes active and digests the cohesion complex that holds together the replicated chromosomes. Once freed from cohesion, the mitotic spindle generates force to pull the chromosomes to the opposite side of the cell.</p>

<figure>
<img class="img-responsive" src="images/separase_cohesins.jpg" alt="Separase Digests Cohesins">
<figcaption>Separase Digests Cohesins</figcaption>
</figure>

<h3>Activation of APC</h3>

<p>APC is kept inactive until all the chromosomes are properly attached to microtubules in the spindles. Active APC requires Cdc20. Cdc20 interacts with proteins in the kinetochore of unattached chromosomes and is kept inactive. When all chromosomes are attached to microtubules, Cdc20 can no longer interacts with kinetochore proteins and is able to bind APC and trigger its activation.</p>

<figure>
<img class="img-responsive" src="images/apc_activation.jpg" alt="Activation of APC">
<figcaption>Activation of APC</figcaption>
</figure>
	
	          </div><!-- /.blog-post -->
	       </div><!--/.col-xs-12-->
		</div><!--/.row-->
    </div><!-- /.container -->
<?php include '../includes/scripts.inc.php'; ?>

</body></html>