---
permalink: /
title: ""
excerpt: ""
author_profile: true
redirect_from: 
  - /about/
  - /about.html
---

{% if site.google_scholar_stats_use_cdn %}
{% assign gsDataBaseUrl = "https://cdn.jsdelivr.net/gh/" | append: site.repository | append: "@" %}
{% else %}
{% assign gsDataBaseUrl = "https://raw.githubusercontent.com/" | append: site.repository | append: "/" %}
{% endif %}
{% assign url = gsDataBaseUrl | append: "google-scholar-stats/gs_data_shieldsio.json" %}

<span class='anchor' id='about-me'></span>

I am a Ph.D. student in the [Department of Computer Science & Engineering, Lehigh University](https://engineering.lehigh.edu/cse), where I am advised by Prof. [Lichao Sun](https://lichao-sun.github.io). I was a research intern at the [AI&I Department, Mayo Clinic](https://www.mayo.edu/research/departments-divisions/artificial-intelligence-informatics/overview) <img src='./images/logos/mayo.png' style='height: 1.5em;'>, where I am developing vision-language pre-training and federated learning algorithms for electronic health records (EHR).

My recent research focuses on **Multi-modal and Federated Learning for Biomedicine**, as well as efficient machine/deep learning system design, with the goal of **Accelerating Discovery to Delivery for Clinical Excellence**. Ultimately, my career goal is to develop trustworthy and reliable artificial general intelligence (AGI) systems for computational precision medicine and health.

I have published approximately 20 research papers with total <a href='https://scholar.google.com/citations?user=XL1iKSEAAAAJ'><img src="https://img.shields.io/endpoint?url={{ url | url_encode }}&logo=Google%20Scholar&labelColor=f6f6f6&color=9cf&style=flat&label=citations"></a>.


# 🔥 News
- *2024.01*: &nbsp; 🎉🎉 I will join  <img src='./images/logos/nec.jpeg' style='height: 1.4em;'>  in Princeton, NJ as a Research Intern during summer, working on Multimodal Large Language Model for Healthcare!
- *2023.12*: &nbsp; We release [Robust Computer Vision in an Ever-Changing World: A Survey of Techniques for Tackling Distribution Shifts](https://arxiv.org/abs/2312.01540)!
- *2023.07-10*: &nbsp; We conduct several evaluations of large foundation models for healthcare, including [Holistic evaluation of GPT-4V for biomedical imaging](https://arxiv.org/abs/2312.05256), [primary outcomes of GPT-4V for radiology and pathology VQA](https://arxiv.org/abs/2310.19061), and [LLM for radiology NLP](https://arxiv.org/abs/2307.13693).
- *2023.06*: &nbsp; We release [FedMLSecurity: A Benchmark for Attacks and Defenses in Federated Learning and LLMs](https://arxiv.org/abs/2306.04959)!
- *2023.05*: &nbsp; The first preprint of [BiomedGPT: A Unified and Generalist Biomedical Generative Pre-trained Transformer for Vision, Language, and Multimodal Tasks](https://arxiv.org/abs/2305.17100) is released. We are still working on it!
- *2023.04*: &nbsp; 🎉🎉 I will join  <img src='./images/logos/amazon.png' style='height: 1.4em;'>  in San Diego as a Applited Scientist Intern during summer. See you in California!
- *2023.03*: &nbsp; The first preprint of [FeDepth](https://arxiv.org/abs/2303.04887) is released.
- *2023.02*: &nbsp; The first preprint of [A Comprehensive Survey on Pretrained Foundation Models: A History from BERT to ChatGPT](https://arxiv.org/abs/2302.09419) is released. We are still working on it!
- *2023.01*: &nbsp; 🎉🎉 I join <img src='./images/logos/mayo.png' style='height: 1.5em;'> [Mayo ADVANCE Lab](https://www.researchgate.net/lab/Mayo-ADVANCE-Lab-PI-Hongfang-Liu-Hongfang-Liu) as a Bioinformatics Intern.
- *2022.10*: &nbsp; [FedR](https://aclanthology.org/2022.findings-emnlp.43.pdf) is accepted by EMNLP 22.
- *2022.09*: &nbsp; 🎉🎉 My intern at Samsung Research America is extended to fall semester!
- *2022.08*: &nbsp; [Adversarial Attack and Defense on Graph Data: A Survey](https://ieeexplore.ieee.org/document/9878092) is accepted by TKDE.
- *2022.06*: &nbsp; I'am honored to be the PC Member of FedGraph2022 @ CIKM22. We need your contributions!
- *2022.05*: &nbsp; 🎉🎉 I work as Summer Research Intern for Knox - AI/Mobile/Privacy @ <img src='./images/logos/sra.png' style='height: 1.5em;'>.
- *2022.02*: &nbsp; I'am honored to be invited to present at WSDM'22 FL4P-WSDM Workshop. <a href='https://drive.google.com/file/d/1_Eh9Zf8fICPFu1j1RTCjH7dQ0DIspSkw/view'><img src="https://img.shields.io/badge/slide-important">


# 📝 Publications 

<div class='paper-box'><div class='paper-box-image'><div><div class="badge">arXiv 2023</div><img src='images/pub/biomedgpt.png' alt="sym" width="100%"></div></div>
<div class='paper-box-text' markdown="1">

[BiomedGPT: A Unified and Generalist Biomedical Generative Pre-trained Transformer for Vision, Language, and Multimodal Tasks](https://arxiv.org/pdf/2305.17100.pdf)

**Kai Zhang**, Jun Yu, Zhiling Yan, Yixin Liu, Eashan Adhikarla, Sunyang Fu, Xun Chen, Chen Chen, Yuyin Zhou, Xiang Li, Lifang He, Brian D. Davison, Quanzheng Li, Yong Chen, Hongfang Liu, Lichao Sun
- **TL;DR**: We introduce a unified and generalist Biomedical Generative Pre-trained Transformer (BiomedGPT) model, which leverages self-supervision on large and diverse datasets to accept multi-modal inputs and perform a range of downstream tasks.
- **Source Code**: [BiomedGPT ![](https://img.shields.io/github/stars/taokz/BiomedGPT?style=social)](https://github.com/taokz/BiomedGPT).
</div>
</div>

<div class='paper-box'><div class='paper-box-image'><div><div class="badge">FLSys 2023</div><img src='images/pub/fedepth.png' alt="sym" width="100%"></div></div>
<div class='paper-box-text' markdown="1">

[Memory-adaptive Depth-wise Heterogenous Federated Learning](https://arxiv.org/pdf/2303.04887v1.pdf)

**Kai Zhang**, Yutong Dai, Hongyi Wang, Eric Xing, Xun Chen, Lichao Sun
- **TL;DR**: We introduce a memory-adaptive depth-wise learning solution in FL, which adaptively decomposes the full model into blocks according to the memory budgets of each client and trains blocks sequentially to obtain a full inference model.
- **Source Code**: [FeDepth ![](https://img.shields.io/github/stars/taokz/fedepth?style=social)](https://github.com/taokz/FeDepth).
</div>
</div>

<div class='paper-box'><div class='paper-box-image'><div><div class="badge">EMNLP 2022</div><img src='images/pub/fedr.png' alt="sym" width="100%"></div></div>
<div class='paper-box-text' markdown="1">

[Efficient Federated Learning on Knowledge Graphs via Privacy-preserving Relation Embedding Aggregation](https://aclanthology.org/2022.findings-emnlp.43.pdf)

**Kai Zhang**, Yu Wang, Hongyi Wang, Lifu Huang, Carl Yang, Xun Chen, Lichao Sun
- **TL;DR**: Our framework allows for sharing entity embeddings of knowledge graphs across multiple clients while protecting privacy to prevent any potential leakage.
- **Source Code**: [FedR ![](https://img.shields.io/github/stars/taokz/fedr?style=social)](https://github.com/taokz/FedR).
</div>
</div>

- ![TKDE](https://img.shields.io/badge/TKDE-blueviolet) [Adversarial Attack and Defense on Graph Data: A Survey](), Lichao Sun, Yingtong Dou, Carl Yang, **Kai Zhang**, Ji Wang, Philip S. Yu, Lifang He, Bo Li [![](https://img.shields.io/github/stars/safe-graph/graph-adversarial-learning-literature?style=social)](https://github.com/safe-graph/graph-adversarial-learning-literature)


<!---
# 🎖 Honors and Awards
- *2021.10* Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare aliquet ipsum, ac tempus justo dapibus sit amet. 
- *2021.09* Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare aliquet ipsum, ac tempus justo dapibus sit amet. 

# 📖 Educations
- *2019.06 - 2022.04 (now)*, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare aliquet ipsum, ac tempus justo dapibus sit amet. 
- *2015.09 - 2019.06*, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare aliquet ipsum, ac tempus justo dapibus sit amet. 

# 💬 Invited Talks
- *2021.06*, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare aliquet ipsum, ac tempus justo dapibus sit amet. 
- *2021.03*, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare aliquet ipsum, ac tempus justo dapibus sit amet.  \| [\[video\]](https://github.com/)

# 💻 Internships
- *2019.05 - 2020.02*, [Lorem](https://github.com/), China.
-->