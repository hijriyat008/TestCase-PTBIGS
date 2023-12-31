PGDMP                  	    {            testapp    16.0    16.0 =    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                        0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16400    testapp    DATABASE     �   CREATE DATABASE testapp WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
    DROP DATABASE testapp;
                postgres    false            �            1259    17242    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    17241    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    221                       0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    220            �            1259    17218 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    17217    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    216                       0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    215            �            1259    17266    pasiens    TABLE     �  CREATE TABLE public.pasiens (
    id bigint NOT NULL,
    nik_pasien bigint NOT NULL,
    nama_pasien character varying(255) NOT NULL,
    tanggal_lahir date NOT NULL,
    jk character varying(255) NOT NULL,
    alamat character varying(255) NOT NULL,
    no_hp bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT pasiens_jk_check CHECK (((jk)::text = ANY ((ARRAY['L'::character varying, 'P'::character varying])::text[])))
);
    DROP TABLE public.pasiens;
       public         heap    postgres    false            �            1259    17265    pasiens_id_seq    SEQUENCE     w   CREATE SEQUENCE public.pasiens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.pasiens_id_seq;
       public          postgres    false    225                       0    0    pasiens_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.pasiens_id_seq OWNED BY public.pasiens.id;
          public          postgres    false    224            �            1259    17235    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            �            1259    17278 
   pelayanans    TABLE     �   CREATE TABLE public.pelayanans (
    id bigint NOT NULL,
    nama_pelayanan character varying(255) NOT NULL,
    harga bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.pelayanans;
       public         heap    postgres    false            �            1259    17277    pelayanans_id_seq    SEQUENCE     z   CREATE SEQUENCE public.pelayanans_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.pelayanans_id_seq;
       public          postgres    false    227                       0    0    pelayanans_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.pelayanans_id_seq OWNED BY public.pelayanans.id;
          public          postgres    false    226            �            1259    17285    pendaftarans    TABLE     S  CREATE TABLE public.pendaftarans (
    id bigint NOT NULL,
    no_registrasi bigint NOT NULL,
    no_rekam_medis character varying(255) NOT NULL,
    waktu_registrasi character varying(255) NOT NULL,
    pasien_id bigint NOT NULL,
    jenis_registrasi character varying(255) NOT NULL,
    pelayanan_id bigint NOT NULL,
    jenis_pembayaran character varying(255) NOT NULL,
    status_registrasi character varying(255) NOT NULL,
    waktu_mulai character varying(255) NOT NULL,
    waktu_selesai character varying(255) NOT NULL,
    nama_petugas character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT pendaftarans_status_registrasi_check CHECK (((status_registrasi)::text = ANY ((ARRAY['Aktif'::character varying, 'Tutup Layanan'::character varying])::text[])))
);
     DROP TABLE public.pendaftarans;
       public         heap    postgres    false            �            1259    17284    pendaftarans_id_seq    SEQUENCE     |   CREATE SEQUENCE public.pendaftarans_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.pendaftarans_id_seq;
       public          postgres    false    229                       0    0    pendaftarans_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.pendaftarans_id_seq OWNED BY public.pendaftarans.id;
          public          postgres    false    228            �            1259    17254    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    17253    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    223                       0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    222            �            1259    17225    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    17224    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    218                       0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    217            >           2604    17245    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    220    221            <           2604    17221    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216            A           2604    17269 
   pasiens id    DEFAULT     h   ALTER TABLE ONLY public.pasiens ALTER COLUMN id SET DEFAULT nextval('public.pasiens_id_seq'::regclass);
 9   ALTER TABLE public.pasiens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224    225            B           2604    17281    pelayanans id    DEFAULT     n   ALTER TABLE ONLY public.pelayanans ALTER COLUMN id SET DEFAULT nextval('public.pelayanans_id_seq'::regclass);
 <   ALTER TABLE public.pelayanans ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    227    227            C           2604    17288    pendaftarans id    DEFAULT     r   ALTER TABLE ONLY public.pendaftarans ALTER COLUMN id SET DEFAULT nextval('public.pendaftarans_id_seq'::regclass);
 >   ALTER TABLE public.pendaftarans ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    229    229            @           2604    17257    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    223    223            =           2604    17228    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            �          0    17242    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    221   K       �          0    17218 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    216   <K       �          0    17266    pasiens 
   TABLE DATA           x   COPY public.pasiens (id, nik_pasien, nama_pasien, tanggal_lahir, jk, alamat, no_hp, created_at, updated_at) FROM stdin;
    public          postgres    false    225   �K       �          0    17235    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    219   `M       �          0    17278 
   pelayanans 
   TABLE DATA           W   COPY public.pelayanans (id, nama_pelayanan, harga, created_at, updated_at) FROM stdin;
    public          postgres    false    227   }M       �          0    17285    pendaftarans 
   TABLE DATA           �   COPY public.pendaftarans (id, no_registrasi, no_rekam_medis, waktu_registrasi, pasien_id, jenis_registrasi, pelayanan_id, jenis_pembayaran, status_registrasi, waktu_mulai, waktu_selesai, nama_petugas, created_at, updated_at) FROM stdin;
    public          postgres    false    229   $N       �          0    17254    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, created_at, updated_at) FROM stdin;
    public          postgres    false    223   �O       �          0    17225    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    218   �O       	           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    220            
           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 7, true);
          public          postgres    false    215                       0    0    pasiens_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.pasiens_id_seq', 9, true);
          public          postgres    false    224                       0    0    pelayanans_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.pelayanans_id_seq', 7, true);
          public          postgres    false    226                       0    0    pendaftarans_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.pendaftarans_id_seq', 10, true);
          public          postgres    false    228                       0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    222                       0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    217            N           2606    17250    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    221            P           2606    17252 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    221            G           2606    17223    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    216            W           2606    17276 !   pasiens pasiens_nik_pasien_unique 
   CONSTRAINT     b   ALTER TABLE ONLY public.pasiens
    ADD CONSTRAINT pasiens_nik_pasien_unique UNIQUE (nik_pasien);
 K   ALTER TABLE ONLY public.pasiens DROP CONSTRAINT pasiens_nik_pasien_unique;
       public            postgres    false    225            Y           2606    17274    pasiens pasiens_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.pasiens
    ADD CONSTRAINT pasiens_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.pasiens DROP CONSTRAINT pasiens_pkey;
       public            postgres    false    225            [           2606    17283    pelayanans pelayanans_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.pelayanans
    ADD CONSTRAINT pelayanans_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.pelayanans DROP CONSTRAINT pelayanans_pkey;
       public            postgres    false    227            ]           2606    17293    pendaftarans pendaftarans_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.pendaftarans
    ADD CONSTRAINT pendaftarans_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.pendaftarans DROP CONSTRAINT pendaftarans_pkey;
       public            postgres    false    229            R           2606    17261 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    223            T           2606    17264 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    223            I           2606    17234    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    218            K           2606    17232    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    218            L           1259    17240    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    219            U           1259    17262 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    223    223            �      x������ � �      �   �   x�]��� ��<�B��˒�bM�,����3�|?-4J�F�
��	L��9DL4Yn@��	>)Ʒ3��J�nɈr��>%��g���p���{�s8&�M�#�dǜ��Rv�T-�U�ھ��֚^�蘟c��9�t��P��iIj�!�?h�      �   c  x�m��n�0���S������j�T�i��K�^�%n;"XU޾����#{>��
ZpBC�y(�Ķ�c	p��"��yC������� �,���Jr&�t.��F!)��g�,�l�*�?xǁnq^�'^<�ݝ&'hj��8U!-&�ƚ��^���5�d1)�Q��f��;��J�dcw���ؘ/W�]��_�dKg��$%���0�k4	HR���%��)�X7�(ٚӹ�6�su�aIF���a�^�:�	A�[6��T:Y7�?��o���P�ÄF� � Y�{r����������U�Z2jMM�4��� Y��A�l�/��O2�-n����	F��<��i�cF)��ھ�      �      x������ � �      �   �   x�u��
1@��+�'iӴ�Y8A��ͥ�H������P�\����B,��L���d��=���|��v���XE��k}��+�5���� q�g���?�W/z@T�c�K�ِh�1p���4\�E��7&
���(a)Z��?JC[[      �   �  x����N�0������c;�}�����ZQ��B�=�B�LL)Q�,�O�,Pr#�$p�v^o@�r��H�K���<�O�O&��A��Sr��X���+�r�_-�y)ܹ�u�J�I�K���1�4Ӵ��X����h�o�8G�]�GN9rZ@Z����(S'ĉjW��?"��>�ം�λ=��"SMϮ7o%�P��U6&�V�j%HYXU@тM�ƃ��wχ�a��ܗ+]M#�ڊ,�a�V�)RR�%���'��|��7��Y�3�<�=Z�$YO\���$������M��DG�ܧ5����OZ�~a:�����e��^��=d�3�E6Ò���n��z�J�_X���B����jx��%�{à��s�:��:��a��U����7��`�      �      x������ � �      �      x������ � �     