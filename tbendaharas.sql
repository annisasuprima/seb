PGDMP                         x            ni    10.8    10.8 	    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            �            1259    39515    details_damage    TABLE     �   CREATE TABLE public.details_damage (
    disaster_event_id character(6) NOT NULL,
    total integer,
    damage_id character(3) NOT NULL
);
 "   DROP TABLE public.details_damage;
       public         postgres    false            �           0    0    TABLE details_damage    ACL     4   GRANT ALL ON TABLE public.details_damage TO PUBLIC;
            public       postgres    false    215            �          0    39515    details_damage 
   TABLE DATA               M   COPY public.details_damage (disaster_event_id, total, damage_id) FROM stdin;
    public       postgres    false    215   .	       2           2606    39593     details_damage details_damage_pk 
   CONSTRAINT     x   ALTER TABLE ONLY public.details_damage
    ADD CONSTRAINT details_damage_pk PRIMARY KEY (damage_id, disaster_event_id);
 J   ALTER TABLE ONLY public.details_damage DROP CONSTRAINT details_damage_pk;
       public         postgres    false    215    215            3           2606    39647    details_damage damage_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.details_damage
    ADD CONSTRAINT damage_fk FOREIGN KEY (damage_id) REFERENCES public.damage_material(id);
 B   ALTER TABLE ONLY public.details_damage DROP CONSTRAINT damage_fk;
       public       postgres    false    215            4           2606    39652     details_damage disaster_event_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.details_damage
    ADD CONSTRAINT disaster_event_fk FOREIGN KEY (disaster_event_id) REFERENCES public.disaster_event(id);
 J   ALTER TABLE ONLY public.details_damage DROP CONSTRAINT disaster_event_fk;
       public       postgres    false    215            �      x�s1 CNN ����� |�     