package online.fredinfo.portfolio.models;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import java.util.Set;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.Table;


@Entity
@Table(name = "skills")
@Data
@NoArgsConstructor
@AllArgsConstructor
public class Skill {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    private String name;
    private String description;
    private String icon;

    @ManyToMany(mappedBy = "skills")
    private Set<Project> projects;

    public Skill(String name, String description, String icon, Set<Project> projects) {
        this.name = name;
        this.description = description;
        this.icon = icon;
        this.projects = projects;
    }
}