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

I am a second-year Ph.D. student at [Department of Computer Science & Engineering, Lehigh University](https://engineering.lehigh.edu/cse), advised by Prof. [Lichao Sun](https://lichao-sun.github.io). Previously, I was the research assistant at [Embry-Riddle Aeronautical University](https://daytonabeach.erau.edu/college-engineering/electrical-engineering-computer-science), aiming to analyze large-scale aviaiton-related data for effective flight scheduling under emergency.
Now, I work at [AI&I Department, Mayo Clinic](https://www.mayo.edu/research/departments-divisions/artificial-intelligence-informatics/overview) <img src='./images/logos/mayo.png' style='height: 1.5em;'> as a research intern, working on Vision-Language Pre-training and Federated Learning for EHR. 

At present, I focus on **Multi-modal and Federated Learning for Biomedicine** as well as efficient machine/deep learning system design. My mid-term goal is to develop effective, efficient and privacy-aware algorithms for **Accelerating Discovery to Delivery for Clinical Excellence**. One of my career goals is to develop trustworthy and reliable artificial general intelligence (AGI) systems for computational precision medicine & health. 

I have published approximately 20 research papers with total <a href='https://scholar.google.com/citations?user=XL1iKSEAAAAJ'><img src="https://img.shields.io/endpoint?url={{ url | url_encode }}&logo=Google%20Scholar&labelColor=f6f6f6&color=9cf&style=flat&label=citations"></a>).


# 🔥 News
- *2023.03*: &nbsp; The first preprint of [FeDepth](https://arxiv.org/abs/2303.04887) is released.
- *2023.02*: &nbsp; The first preprint of [A Comprehensive Survey on Pretrained Foundation Models: A History from BERT to ChatGPT](https://arxiv.org/abs/2302.09419) is released. We are still working on it!
- *2023.01*: &nbsp; 🎉🎉 I join <img src='./images/logos/mayo.png' style='height: 1.5em;'> [Mayo ADVANCE Lab](https://www.researchgate.net/lab/Mayo-ADVANCE-Lab-PI-Hongfang-Liu-Hongfang-Liu) as a Bioinformatics Intern.
- *2022.10*: &nbsp; [FedR](https://aclanthology.org/2022.findings-emnlp.43.pdf) is accepted by EMNLP 22.
- *2022.09*: &nbsp; 🎉🎉 My intern at Samsung Research America is extended to fall semester!
- *2022.08*: &nbsp; [Adversarial Attack and Defense on Graph Data: A Survey](https://ieeexplore.ieee.org/document/9878092) is accepted by TKDE.
- *2022.06*: &nbsp; I'am honored to be the PC Member of FedGraph2022 @ CIKM22. We need your contributions!
- *2022.05*: &nbsp; 🎉🎉 I work as Summer Research Intern for Knox - AI/Mobile/Privacy @ <img src='./images/logos/sra.png' style='height: 1.5em;'>.
- *2022.02*: &nbsp; I'am honored to be invited to present at WSDM'22 FL4P-WSDM Workshop.

# 📝 Publications 

<div class='paper-box'><div class='paper-box-image'><div><div class="badge">EMNLP 2022</div><img src='images/pub/fedr.png' alt="sym" width="100%"></div></div>
<div class='paper-box-text' markdown="1">

[Efficient Federated Learning on Knowledge Graphs via Privacy-preserving Relation Embedding Aggregation](https://aclanthology.org/2022.findings-emnlp.43.pdf)

**Kai Zhang**, Yu Wang, Hongyi Wang, Lifu Huang, Carl Yang, Xun Chen, Lichao Sun
- **TL;DR**: Our framework allows for sharing entity embeddings of knowledge graphs across multiple clients while protecting privacy to prevent any potential leakage.
- **Source Code**: [FedR ![](https://img.shields.io/github/stars/taokz/fedr?style=social)](https://github.com/taokz/FedR).
</div>
</div>

- `TKDE` [Adversarial Attack and Defense on Graph Data: A Survey](), Lichao Sun, Yingtong Dou, Carl Yang, **Kai Zhang**, Ji Wang, Philip S. Yu, Lifang He, Bo Li [![](https://img.shields.io/github/stars/safe-graph/graph-adversarial-learning-literature?style=social)](https://github.com/safe-graph/graph-adversarial-learning-literature)


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