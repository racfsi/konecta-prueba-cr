PGDMP  9                	    {            konecta    16.0    16.0     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    24576    konecta    DATABASE     }   CREATE DATABASE konecta WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Colombia.1252';
    DROP DATABASE konecta;
                postgres    false            �            1259    24587 	   productos    TABLE     5  CREATE TABLE public.productos (
    id bigint NOT NULL,
    nombre text NOT NULL,
    ref text NOT NULL,
    precio integer NOT NULL,
    peso integer NOT NULL,
    categoria text NOT NULL,
    stock integer NOT NULL,
    cant_vendida integer NOT NULL,
    fecha_creacion timestamp with time zone NOT NULL
);
    DROP TABLE public.productos;
       public         heap    postgres    false            �            1259    24586    productos_id_seq    SEQUENCE     y   CREATE SEQUENCE public.productos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.productos_id_seq;
       public          postgres    false    216            �           0    0    productos_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.productos_id_seq OWNED BY public.productos.id;
          public          postgres    false    215                       2604    24590    productos id    DEFAULT     l   ALTER TABLE ONLY public.productos ALTER COLUMN id SET DEFAULT nextval('public.productos_id_seq'::regclass);
 ;   ALTER TABLE public.productos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            �          0    24587 	   productos 
   TABLE DATA           r   COPY public.productos (id, nombre, ref, precio, peso, categoria, stock, cant_vendida, fecha_creacion) FROM stdin;
    public          postgres    false    216   t       �           0    0    productos_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.productos_id_seq', 6, true);
          public          postgres    false    215                       2606    24594    productos productos_pkey1 
   CONSTRAINT     W   ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_pkey1 PRIMARY KEY (id);
 C   ALTER TABLE ONLY public.productos DROP CONSTRAINT productos_pkey1;
       public            postgres    false    216            �   �   x�u�M�0���)� f:�]�Z�܌P����sx1�1�/$3��2��(�<�qt ["�{i�q���M�)e�m���U�tS}�m�����0Jw�(�/A��t�%�P4r��~J~��K��ܹs���s�%���i�Dzw�|[kp�ךsdK�+���H     