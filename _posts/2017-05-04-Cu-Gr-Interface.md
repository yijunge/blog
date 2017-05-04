---
layout: post
title: Cu Gr Interface
---

## Bulk Cu (fcc) relaxation

- Structure: fcc (1 atom unit cell)
- Pseudopotential: [Cu ultrasoft LDA](http://www.quantum-espresso.org/wp-content/uploads/upf_files/Cu.pz-dn-rrkjus_psl.0.2.UPF)
- k sampling grid: `14x14x14`
- cutoff energy: `8o Ry`
- Relaxed lattice constant: `3.538 A` (experiment value: 3.61 A)
- [scf input file](https://github.com/yijunge/Cu-Gr-interface/blob/master/fcc_Cu/Cu.scf.in)

## Bulk graphene relaxation
- Structure: single layer, 2 atoms
- Pseudopotential: [C ultrasoft LDA](http://www.quantum-espresso.org/wp-content/uploads/upf_files/C.pz-n-rrkjus_psl.0.1.UPF)
- k sampling grid: `10x10x1`
- Cutoff energy: `80 Ry`
- Relaxed lattice constant:`2.445 A` (experiment value: `2.46 A`, difference 0.6%)
- [scf input file](https://github.com/yijunge/Cu-Gr-interface/blob/master/mono_graphene/graphene.scf.in)  

## Cu-Gr interface relaxation

### Relaxation procedure:
__Fix Cu(111) in-plane lattice constants__ to be bulk Cu lattice constants, cross-plane lattice constant and ions positions are allowed to change.

Lattice mismatch between Cu(111) and graphene: 2.3% ( __graphene is strained__ )

### Structure:
#### Structure 1: supercell
6 layers of Cu on both sides of the graphene layer, __periodic in all directions__. This is **not** a symmetric structure.

Side view | Top view              
---------- | -----------
![sideview](https://github.com/yijunge/Cu-Gr-interface/blob/master/supercell/Cu_Gr_screenshot_1.png) | ![topview](https://github.com/yijunge/Cu-Gr-interface/blob/master/supercell/Cu_Gr_left_half_topview.png)
##### Motivations:
>**Easy to converge, compared with the slab structure**

##### Computational details:
- k sampling grid: 10x10x1
- Cutoff energy: 120 Ry
- **After relaxation**:

> **The difference of the interlayer distance in the interface and in the bulk Cu is `3%`, which we consider acceptable.**

|Interlayer distance |
|--------------------|
|![interlayer dis vs bulk Cu](https://github.com/yijunge/Cu-Gr-interface/blob/master/supercell/distance_vs_bulk_Cu.png)

#### Structure 2: slab
vacuum on both sides

Side view | Top view
----------|-----------
![side view](https://github.com/yijunge/Cu-Gr-interface/blob/master/slab/side_view.png)|![Top view](https://github.com/yijunge/Cu-Gr-interface/blob/master/slab/top_view.png)
##### Motivations:
> **1. More similar to experiment**

> **2. Less atoms in the unit cell, less computational expensive in phonon calculations.**

##### Computational details:

- k sampling grid: 12x12x1
- Cutoff energy: 120 Ry
- **After relaxation**

> **The difference of the interlayer distance in the slab and in the bulk is around `2.7%`**

|Interlayer distance in the slab structure|
|-----------------------------------------|
|![Interlayer dis vs bulk](https://github.com/yijunge/Cu-Gr-interface/blob/master/slab/inter_layer_dis.png)|
## Cu-Gr interface Electronic properties
### Structure 1 (supercell)
### Structure 2 (slab)
## Cu-Gr Interface Phonon calculations
### Structure 1 (supercell)
**Note: Supercell(GGA) is a previous calculation using periodic supercell structure and a GGA pseudopotential.**

|Supercell Phonon dispersion|Supercell (GGA) Phonon dispersion|
|----------------------|---------------------------------|
|![Phonon dispersion](https://github.com/yijunge/Cu-Gr-interface/blob/master/supercell/ph_dis.png)|![previous calculation](https://github.com/yijunge/Cu_Gr/blob/master/Cu_Gr_new_struc/Cu_Gr_123/ph_1_1/ph_dispersion.png)|

### Structure 2 (slab)
**Note: Supercell(GGA) is a previous calculation using periodic supercell structure and a GGA pseudopotential.**

|Slab Phonon dispersion|Supercell (GGA) Phonon dispersion|
|----------------------|---------------------------------|
|![Phonon dispersion](https://github.com/yijunge/Cu-Gr-interface/blob/master/slab/phonon_dis.png)|![previous calculation](https://github.com/yijunge/Cu_Gr/blob/master/Cu_Gr_new_struc/Cu_Gr_123/ph_1_1/ph_dispersion.png)|
## Cu-Gr interface electron-phonon coupling
### Structure 1 (supercell)
**Note: Supercell(GGA) is a previous calculation using periodic supercell structure and a GGA pseudopotential.**

>**The Eliashberg function has a peak at the frequency 358.5 cm-1.**

|Supercell a2F|Supercell(GGA)Phonon dispersion|
|--------|-------------------------------|
|![supercell a2F](https://github.com/yijunge/Cu-Gr-interface/blob/master/supercell/a2f.png)|![previous a2F](https://github.com/yijunge/Cu_Gr/blob/master/Cu_Gr_new_struc/Cu_Gr_123/ph_dense_k/ph_1_1/a2f_vs_broadening.png)|

### Structure 2 (slab)
**Note: Supercell(GGA) is a previous calculation using periodic supercell structure and a GGA pseudopotential.**

>**The Eliashberg function has a peak at the frequency 257 cm-1, compared with the previous supercell(GGA) case, the eliashberg function has shifted toward the positive horizontal axis. This could be due to that in the GGA case,
the strain is much larger.**

|Slab a2F|Supercell(GGA)Phonon dispersion|
|--------|-------------------------------|
|![slab a2F](https://github.com/yijunge/Cu-Gr-interface/blob/master/slab/a2F.png)|![previous a2F](https://github.com/yijunge/Cu_Gr/blob/master/Cu_Gr_new_struc/Cu_Gr_123/ph_dense_k/ph_1_1/a2f_vs_broadening.png)|
