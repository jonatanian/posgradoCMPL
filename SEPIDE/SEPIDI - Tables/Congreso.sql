USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Congreso]    Script Date: 19/05/2017 12:33:35 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Congreso](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombre_congreso] [varchar](50) NULL,
	[alcance] [varchar](15) NULL,
	[participacion] [varchar](50) NULL,
	[fecha] [date] NULL,
	[registros] [varchar](50) NULL,
	[otro] [varchar](50) NULL,
	[creador_id] [int] NULL,
	[updated_at] [datetime] NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


